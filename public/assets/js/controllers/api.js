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

api.controller('PhotoController', ['$scope', '$http',
    function($scope, $http) {
        $scope.retrieve = function(lat, lng) {
            var url = 'https://api.instagram.com/v1/media/search?lat=' + lat + '&lng=' + lng + '&access_token=2227972880.6bd0d43.17e7232c04b34d2c999abd5201733e7a';

            $http.jsonp(url + '&callback=JSON_CALLBACK').success(function(data) {
                $scope.photos = data;
                console.log(data);
            });
        }
    }
]);

// foursquare controller
api.controller('FoursquareController', ['$scope', '$http',
    function($scope, $http) {
        $scope.foursquareClientId = 'SOMQPXPTYGH5D45CIKDYXOTZSHPY1TMZRLYFXPCCXMAELAOH';
        $scope.foursquareClientSecret = '3H42G4VRXP5IQK1OOR5SCAKEGAQ1CEEDAAV3H4RC0O5WJHKV';
        $scope.foursquareUrl = 'https://api.foursquare.com/v2/venues/search?near=';
        $scope.retrieve = function(query) {
            $scope.foursquareUrl = $scope.foursquareUrl + query + '&client_id=' + $scope.foursquareClientId + '&client_secret=' + $scope.foursquareClientSecret + '&v=20151710&limit=10';
            $http.get($scope.foursquareUrl).
            success(function(data) {
                $scope.foursquareData = data;
            });
        }

        $scope.imgWidth = 318;
        $scope.imgHeight = 220;
        $scope.streetviewURL = 'https://maps.googleapis.com/maps/api/streetview?';
        $scope.streetviewKey = 'AIzaSyDtm7_hcQI0uEXsbrhF44Gon4TZP4LwjSM';
        $scope.getStreet = function(latitude, longitude) {
            var streetviewURL = $scope.streetviewURL + 'size=' + $scope.imgWidth + 'x' + $scope.imgHeight + '&location=' + latitude + ',' + longitude + '&heading=151.78&pitch=-0.76' + '&key=' + $scope.streetviewKey;
            return streetviewURL;
        }
    }
]);

// image url construction (google streetview and foursquare combined!!!)
api.controller('StreetViewImageController', ['$scope',
    function($scope) {
        $scope.imgWidth = 318;
        $scope.imgHeight = 220;
        $scope.streetviewURL = 'https://maps.googleapis.com/maps/api/streetview?';
        $scope.streetviewKey = 'AIzaSyDtm7_hcQI0uEXsbrhF44Gon4TZP4LwjSM';
        $scope.retrieve = function(latitude, longitude) {
            $scope.streetviewURL = $scope.streetviewURL + 'size=' + scope.imgWidth + 'x' + $scope.imgHeight + '&location=' + latitude + ',' + longitude + '&heading=151.78&pitch=-0.76' + '&key=' + $scope.streetviewKey;
            return $scope.streetviewURL;
        }
    }
]);

// panoramio controller
api.controller('PanoramioController', ['$scope', '$http',
    function($scope, $http) {
        $scope.panoramioURL = 'http://www.panoramio.com/map/get_panoramas.php?order=popularity&set=full&from=0&to=30&'
        $scope.retrieve = function(minLng, minLat, maxLng, maxLat) {
            //minx, miny, maxx, maxy define the area to show photos from (minimum longitude, latitude, maximum longitude and latitude, respectively).
            $scope.panoramioURL = $scope.panoramioURL + 'minx=' + minLng + '&miny=' + minLat + '&maxx=' + maxLng + '&maxy=' + maxLat + '&size=medium';
            $scope.panoramioImageURLS = [];
            $http.jsonp($scope.panoramioURL + '&callback=JSON_CALLBACK').
                success(function(data) {
                    var photos = data['photos'];
                    var i = Math.floor((Math.random() * 30) + 1); 
                    $scope.image = photos[i];
                });
        }
    }
]);