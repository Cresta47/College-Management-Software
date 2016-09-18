app.controller('RoomFormController', function ($scope, RoomService) {
    $scope.name;
    $scope.building;
    $scope.room;
    $scope.floor;

    $scope.createRoom = function () {
        room = {name:$scope.name,
            building:$scope.building,
            floor:$scope.floor,
            room:$scope.room
        }
        RoomService.post(room);
    }

});


app.controller('RoomListCardsController', function ($scope, RoomService) {
    $scope.roomCards;
    $scope.roomList;
    $scope.temp;

    $scope.showList = false;
    $scope.showCards = true;

    $scope.loadAll = function(){

    }
});