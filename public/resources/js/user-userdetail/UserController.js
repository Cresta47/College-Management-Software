app.controller('UserController', function ($scope, UserService) {
    $scope.loadUser = function () {
        $scope.user = UserService.get({id:1});
    }
    $scope.loadUser();
});

app.controller('SignupController', function ($scope, UserService) {

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

app.controller('UserCardsController', function ($scope, UserService) {

    $scope.users;

    $scope.loadAll = function(){
        $scope.users = UserService.all();
    }

    $scope.loadAll();
});