app.controller('CourseListCardsController', function ($scope, CourseService) {

    $scope.courseCards;
    $scope.courseList;
    $scope.temp;

    $scope.showList = false;
    $scope.showCards = true;

    $scope.loadAll = function(){
        $scope.temp = CourseService.userCourses().$promise.then(function(result){
            $scope.temp = result.data;
            $scope.courseCards = $scope.temp;
            $scope.courseList = $scope.temp;
        });
    }

    $scope.populate = function(){
        $scope.courseList = $scope.temp;
        $scope.courseCards = $scope.temp;
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