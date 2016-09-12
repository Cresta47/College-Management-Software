/**
 * Created by sadhikari on 9/6/2016.
 */


var FilterService = app.service('FilterService', function ($http) {

    var apiURI = 'api/filter';

    return {

        filterUserByStatus: function(){

        },

        filterUserByCourse: function(value) {

            var comparisonOp = '=';

            if(Array.isArray(value)){
                comparisonOp = 'in';
            }

            return $http
                    .get(apiURI,
                        {params:
                            {
                                id:'filterUserByCourse', comparisonOp:comparisonOp, params: value
                            }
                        })

        },
    }

});