function getTypeByParent(parent){
    var type = "";
    switch(parent.toLowerCase()){
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
// Resources/PlatformFilesBundle/public/js/todoList.js
'use strict';

/**
 * Déclaration de l'application spaceCrapApp
 */
var spaceCrapApp = angular
.module('spaceCrapApp', [
    'listExternalsDisks'
])
.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});


/**
 * Déclaration du module listExternalsDisks
 */
var listExternalsDisks = angular.module('listExternalsDisks',[]);


spaceCrapApp.controller('externalDiskCtrl', ['$scope', '$http', "$rootScope",
    function($scope, $http, $rootScope) {

        $scope.externalsDisks = [];
        var responsePromise = $http.get(Routing.generate("homesoft_get_external_disk"));
        responsePromise.success(function(externalsDisks, status, headers, config) {
            $scope.externalsDisks = externalsDisks;
            console.log(externalsDisks);
        });

        $scope.loadMedias = function(mediaDirectory) {
            $rootScope.$broadcast('eventLoadMedia', { mediaDirectory: mediaDirectory });
        };
    }
]);

spaceCrapApp.controller('mediaCtrl', ['$scope', '$http', "$templateCache",
    function($scope, $http, $templateCache ) {
        $scope.$on('eventLoadMedia', function (event, args) {
            $scope.mediaDirectory = args.mediaDirectory;
            $http ( {
                method: "POST",
                url: Routing.generate("homesoft_platform_files_get_files"),
                data: "mediaDirectory="+$scope.mediaDirectory,
                cache: $templateCache,
                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            } ).
            then(function(response) {
                var medias = $scope.medias = [];
                var mdb = require('moviedb')('c971d5aa22ac894f5f011b15584d9f78');

                mdb.searchMovie({query: 'Alien' }, function(err, res){
                    console.log(res);
                });

                $scope.medias = response.data;
            }, function(response) {
                console.log(response.data || "Request failed");
                console.log(response.status);
            });
        });
    }
]);