var UserService = app.service('UserService', function (UserRESTClient) {
	return {
		get: function(id) {
			return UserRESTClient.get({id:id.id});
		},

		getEdit:function(id){
			return UserRESTClient.getEdit({id:id.id})
		},

		post: function(user){
			UserRESTClient.save(user);
		},

		all: function(){
			return UserRESTClient.query();
		},

		edit: function(user){
			return UserRESTClient.edit(user)
		}
	}
});