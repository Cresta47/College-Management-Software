app.controller('UserController', function ($scope, UserService, SessionService) {
    $scope.loadUser = function () {
        UserService.get({id:1}).then(function(response) {
            $scope.user = response.data;
        });
    }
    $scope.loadUser();
});

app.controller('UserFormController', function ($scope, UserService) {
    $scope.user = {};
    $scope.user.email
    $scope.user.password;
    $scope.user.confirm;
    $scope.user.firstName;
    $scope.user.lastName;

    $scope.loadUser = function () {
        $scope.user = UserService.get({id:$scope.params.id});
    }

    $scope.signup = function () {

        user = {email:$scope.user.email,
                password:$scope.user.password,
                confirm:$scope.user.confirm,
                firstName:$scope.user.firstName,
                lastName:$scope.user.lastName
                }

        UserService.post(user).then(function(response){
            alert('User successfully added in the system.'+'\n'+'Check console.log for response.');
            console.log(response.data);
        });

    }
});

app.controller('UserListCardsController', function ($scope, UserService) {

    $scope.users;

    $scope.gridOptions = { data: 'users',
        columnDefs:
            [{field: 'id', displayName: 'ID', width: 50 },
             {field: 'email', displayName: 'Email', width: 300  }
            ],
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
    };

    $scope.loadAll = function(){
        UserService.all().then(function(response) {
            $scope.users = response.data;
        });
    }

    $scope.loadAll();

});