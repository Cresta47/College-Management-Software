/**
 * Created by sadhikari on 8/19/2016.
 */
var RoleService = app.service('RoleService', function (RoleRESTClient) {
    return {
        post: function(role){
            return RoleRESTClient.save(role).$promise;
        },
    }
});