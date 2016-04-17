// Resources/PlatformFilesBundle/public/js/todoList.js
'use strict';

/**
 * Déclaration de l'application spaceCrapApp
 */
var spaceCrapApp = angular
.module('spaceCrapApp', [
    'listRemotes'
])
.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});


/**
 * Déclaration du module listRemotes
 */
var listRemotes = angular.module('listRemotes',[]);


spaceCrapApp.controller('remoteCtrl', ['$scope', '$http', "$rootScope",
    function($scope, $http, $rootScope) {
       $scope.remotes = [];
       var responsePromise = $http.get(Routing.generate("homesoft_platform_files_get_remotes"));
        responsePromise.success(function(remotes, status, headers, config) {
            $scope.remotes = remotes;
        });

        $scope.loadMedias = function(mediaDirectory) {
            $rootScope.$broadcast('eventLoadMedia', { mediaDirectory: mediaDirectory });
        };
    }
]);

spaceCrapApp.controller('mediaCtrl', ['$scope', '$http',
    function($scope, $http ) {

        $scope.$on('eventLoadMedia', function (event, args) {
            $scope.mediaDirectory = args.mediaDirectory;
            $scope.medias = [];

            var url = Routing.generate("homesoft_platform_files_get_files");
            $.ajax({
                data: {mediaDirectory: $scope.mediaDirectory},
                url: url,
                type:'POST',
                success: function () {
                    console.log("yo");
                }
            });
            var req = {
                method: 'POST',
                url: url,
                headers: {
                    'Content-Type': 'application/json'
                },
                data: {mediaDirectory: $scope.mediaDirectory}
            }

            $http(req).then(function(){console.log("yo")}, function(){});

        });
    }
]);