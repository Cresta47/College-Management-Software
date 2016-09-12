app.controller('RoomFormController', function ($scope, RoomsService) {
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
        RoomsService.post(room);
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