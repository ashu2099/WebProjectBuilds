var weatherApp = angular.module('weatherApp',['ngRoute','ngResource']);

//ROUTES

weatherApp.config(function($routeProvider){
$routeProvider
.when('/',{
	templateUrl : 'pages/home.html',
	controller: 'mainController'
})

.when('/forecast',{
	templateUrl : "pages/forecast.html",
	controller: 'forecastController'
})

});
//SERVICES
weatherApp.service('cityService',function(){

	this.city="";
});

weatherApp.controller('mainController',['$scope','$location','cityService','$resource', function($scope,$location,cityService){

	$scope.city=cityService.city;
	$scope.$watch('city',function(){
		cityService.city = $scope.city;
		$scope.rep = $scope.city;
		$scope.getres = function(){
			$location.path("/forecast");
		};
	});
}]);

weatherApp.controller('forecastController',['$scope','$location','cityService','$timeout','$resource',
	function($scope,$location,cityService,$timeout,$resource){

$scope.city=cityService.city;
$scope.weatherAPI = $resource("http://api.openweathermap.org/data/2.5/forecast?units=metric&APPID=dae938e1cb78acf62cecd5dbebc70704", { callback: "JSON_CALLBACK" }, { get: { method: "JSONP" }});

$scope.weatherResult = $scope.weatherAPI.get({q:$scope.city});



    $scope.convertToDate = function(dt) { 
      
        return new Date(dt * 1000);
        
    };

}]);

