var myApp = angular.module('myApp', ['ngRoute', 'ngResource']);

// ROUTES
myApp.config(function ($routeProvider) {
   
    $routeProvider
    
    .when('/', {
        templateUrl: 'home.html',
        controller: 'homeController'
    })
    
    .when('/respage1', {
        templateUrl: 'respage1.html',
        controller: 'resController'
    })
    
});

myApp.controller('homeController', ['$scope', '$http', function($scope, $http) {
            $http.get("js/data.json")
            .then(function(response) {
            $scope.info = response.data;
            });
}]);

myApp.controller('resController', ['$scope', '$http', function($scope, $http) {
            $http.get("js/data2.json")
            .then(function(response) {
            $scope.info = response.data;
            });
}]);
