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