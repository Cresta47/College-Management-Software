var MarksService = app.service('MarksService', function (MarksRESTClient) {
    return {
        get: function(id) {
            return MarksRESTClient.get({id:id.id}).$promise;
        },

        getEdit:function(id){
            return MarksRESTClient.getEdit({id:id.id})
        },

        post: function(marks){
            return MarksRESTClient.save(marks).$promise;
        },

        all: function(){
            return MarksRESTClient.query().$promise;
        },

        edit: function(marks){
            return MarksRESTClient.edit(marks)
        }
    }
});