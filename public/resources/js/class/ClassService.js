var ClassService = app.service('ClassService', function (ClassRESTclient) {
    return {
        get: function(id) {
            return ClassRESTclient.get({id:id.id});
        },

        post: function(oneclass){
            ClassRESTclient.save(oneclass);
        },

        all: function(){
            return ClassRESTclient.query();
        }

    }
});