/**
 * Created by sadhikari on 9/6/2016.
 */


var FilterService = app.service('FilterService', function ($http) {

    var apiURI = 'api/filter';

    return {
        filterUserByCourseId: function(id) {
            return $http.get(apiURI, {params:{id:'filterUserByCourseId', comparisonOp:'=', params: id }});
        },
    }

});