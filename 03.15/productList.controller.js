angular.module("myApp").controller("productList", function($scope){
    $scope.products = [
        {name: "Macbook", price: "36900"},
        {name: "Lenovo", price: "45900"},
        {name: "Dell", price: "25900"}
    ];
});