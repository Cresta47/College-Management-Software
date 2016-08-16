var ClassService = app.service('ClassService', function (ClassRESTclient) {
    return {
        get: function(id) {
            return ClassRESTclient.get({id:id.id});
        },

        getEdit:function(id){
            return ClassRestClient.getEdit({id:id.id})
        },

        post: function(oneclass){
            ClassRESTclient.save(oneclass);
        },

        all: function(){
            return ClassRESTclient.query();
        },

        myClasses: function(){
            return ClassRESTclient.getMyClasses();
        },

        edit: function(classModel){
            return ClassRESTclient.edit(classModel)
        }

    }
});