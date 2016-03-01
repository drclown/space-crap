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
    })
    .bind("select_node.jstree", function(evt, data){
        if(data.node.type === "file-film") {
            $("#play").val(data.node.id);
        }
        else {
            $("#play").val("");
        }
    });
}