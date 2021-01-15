var app = angular.module('app', []);

app.controller('bedrijfsCtrl', function($scope, $http) {

    $http.get('php/auto.php')
    .then(function (response) {
        $scope.bedrijf = response.data.records;
        console.log($scope.bedrijf);
    });
});
