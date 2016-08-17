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


app.controller('ClassListCardsController', function ($scope, ClassService) {

    $scope.classCards;
    $scope.classList;
    $scope.temp;

    $scope.showList = false;
    $scope.showCards = true;

    $scope.loadAll = function(){
        $scope.temp = ClassService.userClasses().$promise.then(function(result){
            console.log(result);
            $scope.temp = result.data;
            $scope.classCards = $scope.temp;
            $scope.classList = $scope.temp;
        });


    }



    $scope.populate = function(){
        $scope.classList = $scope.temp;
        $scope.classCards = $scope.temp;
        $scope.showList = true;
        $scope.viewName = $scope.viewNameList;
    }

    $scope.listCardToggle = function(){
        if($scope.showList === true){
            $scope.showCards = true;
            $scope.viewName = $scope.viewNameCard;
            $scope.showList = false;
        }else{
            $scope.showCards = false;
            $scope.viewName = $scope.viewNameList;
            $scope.showList = true;
        }
    }

    $scope.showEditForm = function(id){
        alert(id);
    }

    $scope.loadAll();
    $scope.populate();

});