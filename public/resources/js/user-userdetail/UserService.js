var UserService = app.service('UserService', function (UserRESTclient) {
	return {
		get: function(id) {
			return UserRESTclient.get({id:id.id});
		},

		post: function(user){
			UserRESTclient.save(user);
		},

		all: function(){
			return UserRESTclient.query();
		},


	}
});