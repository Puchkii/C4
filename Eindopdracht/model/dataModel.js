// haalt de json data van dataController.php op
var app = angular.module('app', ["ngRoute"]);
app.controller('dataController', function($scope, $http) {
  $http.get("controller/dataController.php")
  .then(function(response) {
    $scope.persoonsData = response.data;
  });
});
app.config(function($routeProvider) {
  $routeProvider
  .when("/create", {
    templateUrl : "create.php"
  })
  // .when("/update", {
  //   templateUrl : "update.php"
  // })
  // .when("/delete", {
  //   templateUrl : "delete.php"
  // });
});
