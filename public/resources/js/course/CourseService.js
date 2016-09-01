var CourseService = app.service('CourseService', function (CourseRESTClient) {
    return {
        get: function(id) {
             return CourseRESTClient.get({id:id.id}).$promise;
        },

        getEdit:function(id){
            return CourseRESTClient.getEdit({id:id.id})
        },

        post: function(course){
            return CourseRESTClient.save(course).$promise;
        },

        all: function(){
            return CourseRESTClient.query().$promise;
        },

        edit: function(course){
            return CourseRESTClient.edit(course)
        }
    }
});