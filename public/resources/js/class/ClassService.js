var ClassService = app.service('ClassService', function (ClassRESTClient) {
    return {
        get: function(id) {
            return ClassRESTClient.get({id:id.id});
        },

        getEdit:function(id){
            return ClassRESTClient.getEdit({id:id.id})
        },

        post: function(oneclass){
            ClassRESTClient.save(oneclass);
        },

        userClasses: function(){
            return ClassRESTClient.userClasses();
        },

        edit: function(classModel){
            return ClassRESTClient.edit(classModel)
        }

    }
});