var CourseService = app.service('CourseService', function (CourseRESTClient) {
    return {
        get: function(id) {
            return CourseRESTClient.get({id:id.id});
        },

        getEdit:function(id){
            return CourseRESTClient.getEdit({id:id.id})
        },

        post: function(course){
            CourseRESTClient.save(course);
        },

        userCourses: function(){
            return CourseRESTClient.userCourses();
        },

        edit: function(courseModel){
            return CourseRESTClient.edit(courseModel)
        }

    }
});