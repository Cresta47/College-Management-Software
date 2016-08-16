var UserService = app.service('UserService', function (UserRESTclient) {
	return {
		get: function(id) {
			return UserRESTclient.get({id:id.id});
		},

		getEdit:function(id){
			return UserRestClient.getEdit({id:id.id})
		},

		post: function(user){
			UserRESTclient.save(user);
		},

		all: function(){
			return UserRESTclient.query();
		},

		edit: function(user){
			return UserRESTclient.edit(user)
		}
	}
});