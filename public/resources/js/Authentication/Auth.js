/**
 * Created by sadhikari on 8/28/2016.
 */


app.controller('LoginController', function ($scope, $http) {

    var loginURL = 'login';

    $scope.login = function(){

        var data = {email:$scope.email,password: $scope.password};

        var config = {};

        console.log(data);

        $http.post(loginURL, data, config)
            .success(function (data, status, headers, config) {

            })
            .error(function (data, status, header, config) {

            });
    }

});