function createTreeFiles(path){
    $.jstree.destroy();
    $('#tree-files')
    .jstree({
        'core' : {
            'data' : {
                type: "POST",
                data: {pathRemote: path},
                'url' : Routing.generate('homesoft_platform_files_get_files')
            },
            "themes" : {
                "variant" : "large"
            }
        },
        "types" : {
            "dir" : {
                "icon" : "fa fa-folder-o"
            },
            "file-film" : {
                "icon" : "fa fa-film"
            },
            "file-video" : {
                "icon" : "fa fa-file-movie-o"
            },
            "file-image" : {
                "icon" : "fa fa-file-image-o"
            },
            "file-sound" : {
                "icon" : "fa fa-file-audio-o"
            },
            "file": {
                "icon": "fa fa-file-o"
            }
        },
            "search": {

            "case_insensitive": true,
                "show_only_matches" : true
        },
        "plugins" : [ "types", "search" ]
    }).bind("select_node.jstree", function(evt, data){;
        if(data.node.type === "file-film") {
            $("#play").val(data.node.id);
        }
        else {
            $("#play").val("");
        }
        var parent = getParentNode(data.node);
        var type = getTypeByParent(parent);
        getMediaInfos(data.node.text, type, "fr");
    });
}

function getTypeByParent(parent){
    var type = "";
    switch(parent){
        case "series":
        case "serie":
        case "tv":
            type = "tv";
        break;
        case "movies":
        case "films":
        case "movie":
        case "film":
            type = "movie";
        break;
    }
    return type;
}

function getParentNode(node) {
    var parent = node.parent;

    if(parent == "#") {
        parent = $("#path").html();
    }

    var part = parent.split("/");
    parent = part[part.length-1];
    return parent;
}

function loadMediaInfos(overview, poster_url, original_name, original_language, origin_country, title){
    $("#overview").html("<b>Synopsis : </b>"+overview);
    $("#original-name").html("<b>Titre Original : </b>"+original_name);
    $("#title").html(original_name);
    $("#original-language").html("<b>Langue : </b>"+original_language);
    $("#origin-country").html("<b>Nationalité : </b>"+origin_country);
    $("#poster").attr("src", poster_url);
}

function getMediaInfos(media, type, language) {
    console.log(type);
    console.log(media);
    var key = "c971d5aa22ac894f5f011b15584d9f78";
    var overview = "", poster_url = "", title = "", original_name = "", original_language = "", origin_country = "";
    if(type === "") {
        loadMediaInfos("", "", "", "", "", media);
    }
    else {
        $.ajax({
            dataType: "json",
            url: "https://api.themoviedb.org/3/search/" + type + "?query=" + media + "&api_key=" + key + "&language=" + language,
            success: function (data) {
                var results = data.results[0];
                if (results !== undefined) {
                    poster_url = "http://image.tmdb.org/t/p/w300/" + results.poster_path + "?api_key=" + key;
                    overview = results.overview;
                    original_name = results.original_name;
                    title = results.title;
                    title = media;
                    original_language = results.original_language;
                    origin_country = results.origin_country;
                }
                loadMediaInfos(overview, poster_url, original_name, original_language, origin_country, title);
            }
        });
    }
}

function formatFile(media){

}