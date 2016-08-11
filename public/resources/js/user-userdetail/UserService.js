var UserService = app.service('UserService', function (UserRESTclient, $resource) {
	return {
		get: function(id) {
			return UserRESTclient.get({id:id.id});
		},

		post: function(user){

		},

		all: function(){
			return UserRESTclient.query();
		}

	}
});