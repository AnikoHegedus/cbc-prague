//retrieve the module
var module = angular.module("myApp");

//create a controller
module.controller("studentList", function($scope){
    $scope.color = "green";
    $scope.my_name = "Jan"
});

module.controller("productDetail", function($scope, $http){
    // retrieve some data from server
    $http.get("data.php").then(function(response){
        console.log(response.data);

        //put the data from the response into the view 
        $scope.total_students = 16;
        $scope.present_students = 15;
        $scope.countMissingStudents = function(){
            return $scope.total_students - $scope.present_students;
        }

        $scope.students =[
            {
                name: "Jan",
                present: true
            },
             {
                name: "OG",
                present: true
            },
             {
                name: "Kristina",
                present: false
            }
        ]

    })
});