/**
 * Created by sadhikari on 8/19/2016.
 */

app.controller('RoleFormController', function ($scope, RoleService) {

    $scope.role = {};
    $scope.role.name;
    $scope.role.displayName;
    $scope.role.description;

    $scope.create = function(){
        RoleService.post($scope.role);
    }

});