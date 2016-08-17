app.controller('UserController', function ($scope, UserService) {
    $scope.loadUser = function () {
        $scope.user = UserService.get({id:1});
    }
    $scope.loadUser();
});

app.controller('UserFormController', function ($rootScope,$scope, $stateParams, UserService) {
    $scope.user = {};
    $scope.user.email
    $scope.user.password;
    $scope.user.confirm;
    $scope.user.firstName;
    $scope.user.lastName;
    $scope.params = $stateParams;
    $scope.partialTitle = $scope.partialTitle;

    $scope.loadUser = function () {
        UserService.get({id:$scope.params.id}).$promise.then(function(result){
            $scope.user = result['data'];
        });
    }

    $scope.loadEditForm = function(){
        // TODO Hack to get url parameter . Fix Later
        if($scope.params.id !== undefined){
            $scope.loadUser();
        }
    }

    $scope.signup = function () {
        user = {email:$scope.user.email,
                password:$scope.user.password,
                confirm:$scope.user.confirm,
                firstName:$scope.user.firstName,
                lastName:$scope.user.lastName
                }
        UserService.post(user);
    }

    $scope.edit = function(){
        user = {id:$scope.user.id,
            email:$scope.user.email,
            password:$scope.user.password,
            confirm:$scope.user.confirm,
            firstName:$scope.user.firstName,
            lastName:$scope.user.lastName
        }
        UserService.edit(user);
    }

    $scope.loadEditForm();


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
        $scope.userCards = $scope.temp;
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