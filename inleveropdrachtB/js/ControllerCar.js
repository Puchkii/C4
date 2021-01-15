var a = angular.module('app', []);
a.controller('ControllerCar', function($scope){


  var cars = [{
    brand: "Ford",
    license: "76-DFG-4",
    color: "Green",
    doors: 2,
    price: 35000,
  },
  {
    brand: "Tesla",
    license: "87-FSA-6",
    color: "White",
    doors: 2,
    price: 75000,
  },
  {
    brand: "Audi",
    license: "39-JKL-0",
    color: "Grey",
    doors: 4,
    price: 60000,
  },
  {
    brand: "Volkswagen",
    license: "3-TFG-46",
    color: "Blue",
    doors: 4,
    price: 20000,
  },
  {
    brand: "Maserati",
    license: "67-POE-69",
    color: "Orange",
    doors: 2,
    price: 100000,
  },
  {
    brand: "Lamborgini",
    license: "34-BHK-93",
    color: "Paars",
    doors: 2,
    price: 1000000,
  }
];
// niet boven zetten anders breekt alles...
// sorteer functies voor columns
  $scope.cars = cars;
  $scope.sortCol = 'brand';
  $scope.reverseSort = false;

  $scope.sort = function(col){
    $scope.reverseSort = ($scope.sortCol == col) ? !$scope.reverseSort : false;
    $scope.sortCol = col;
  }
});
