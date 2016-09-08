app.controller('UserController', function ($scope, UserService, SessionService) {
    $scope.loadUser = function () {
        UserService.get({id:1}).then(function(response) {
            $scope.user = response.data;
        });
    }
    $scope.loadUser();
});

app.controller('UserFormController', function ($scope, $stateParams, UserService, RoleService) {
    $scope.stateParams = $stateParams;

    $scope.loadUserforEdit = function () {
        UserService.get({id:$scope.stateParams.id}).then(function(response){
            $scope.user = response.data;
        });
    }

    $scope.editState = false;
    if($scope.stateParams.actionParams.action === 'edit'){
        $scope.editState = true;
        $scope.loadUserforEdit();
    }

    $scope.signUp = function () {
        UserService.post($scope.getUserModel()).then(function(response){
            alert('User successfully added in the system.'+'\n'+'Check console.log for response.');
        });
    }

    $scope.loadRoles = function() {
        $scope.roles = RoleService.all().then(function (response) {
            $scope.roles = response.data;
        });
    }

    $scope.loadRoles();


    $scope.getUserModel = function(){
        var user = {email:$scope.user.email,
            password:$scope.user.password,
            confirm:$scope.user.confirm,
            firstName:$scope.user.firstName,
            lastName:$scope.user.lastName,
            // roles:$scope.form.selectedRoles,
        }

        if($scope.user.id){
            user['id'] = $scope.user.id;
        }
        return user;
    }

    $scope.edit = function(){
        UserService.update($scope.getUserModel()).then(function (response) {
            alert('User Updated.');
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

    $scope.deleteUser = function (id) {
        UserService.delete(id).then(function(response) {
            $scope.loadAll();
        });
    }


    $scope.loadAll();

});