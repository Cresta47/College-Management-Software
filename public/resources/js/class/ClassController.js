app.controller('ClassFormController', function ($scope, ClassService) {

    $scope.name;
    $scope.building;
    $scope.room;
    $scope.floor;

    $scope.createClass = function () {
        oneClass = {name:$scope.name,
            building:$scope.building,
            floor:$scope.floor,
            room:$scope.room
        }
        ClassService.post(oneClass);
    }

});