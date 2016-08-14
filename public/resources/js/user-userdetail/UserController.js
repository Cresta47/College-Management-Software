app.controller('UserController', function ($scope, UserService) {
    $scope.loadUser = function () {
        $scope.user = UserService.get({id:1});
    }
    $scope.loadUser();
});

app.controller('UserFormController', function ($scope, UserService) {

    $scope.email
    $scope.password;
    $scope.confirm;
    $scope.firstName;
    $scope.lastName;

    $scope.signup = function () {
        user = {email:$scope.email,
                password:$scope.password,
                confirm:$scope.confirm,
                firstName:$scope.firstName,
                lastName:$scope.lastName
                }
        console.log(user);
        UserService.post(user);
    }
});

app.controller('UserListCardsController', function ($scope, UserService) {

    $scope.userCards;
    $scope.userList;
    $scope.temp;
    $scope.viewNameCard = "Card";
    $scope.viewNameList = "List";
    $scope.viewName;

    $scope.showList = false;
    $scope.showCards = true;

    $scope.loadAll = function(){
        $scope.temp = UserService.all();
    }

    $scope.populate = function(){
        $scope.userList = $scope.temp;
        $scope.userCards = $scope.temp;
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