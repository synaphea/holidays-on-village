var api = angular.module('api', []);

api.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[|').endSymbol('|]]');
})

// wikipedia controller
api.controller('WikipediaController', ['$scope', '$http',
    function($scope, $http) {
        $scope.wikipediaUrl = 'https://el.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=';
        $scope.retrieve = function(query) {
            $scope.wikipediaUrl = $scope.wikipediaUrl + query + '&callback=JSON_CALLBACK';
            $http.jsonp($scope.wikipediaUrl).
            success(function(data) {
                // var extract = data['query']['pages'][0]['extract'];
                $scope.introduction = data['query']['pages'][Object.keys(data['query']['pages'])[0]]['extract'];
            });
        }
    }
]);

// google streetview controller


//instagram controller
api.controller('InstagramController', ['$scope', '$http',
    function($scope) {
        $scope.instagramURL = 'https://api.instagram.com/v1/tags/';
        $scope.clientID = '6bd0d43dcbdb41f0bb635f04b781f501';
        $scope.clientSecret = '762e179dc9b64fdd906bed99d872e7e3';
        $scope.retrieve = function(query) {
            $scope.instagramURL = $scope.instagramURL + query + '/media/recent?client_id=' + clientID;
            $http.get($scope.instagramURL).
            success(function(data) {

            });
        }

    }
]);