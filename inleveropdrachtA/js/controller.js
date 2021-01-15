var a = angular.module('app', []);
a.controller('myController', function($scope) {
    // allemaal variabelen die ik in scope zet
    // zodat values later in de gaten kunnen worden gehouden
    $scope.firstname = "";
    $scope.lastname = "";
    $scope.address = "";
    $scope.homenumber = "";
    $scope.postal = "";
    $scope.place = "";
    $scope.email = "";

    $scope.updateValue = function() {
      $scope.tableData = [
        [
          $scope.firstname,
        ],
        [
          $scope.lastname,
        ],
        [
          $scope.address,
        ],
        [
          $scope.homenumber,
        ],
        [
          $scope.postal,
        ],
        [
          $scope.place,
        ],
        [
          $scope.email
        ]
      ]
    };
  });
