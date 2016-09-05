var UserService = app.service('UserService', function (UserRESTClient) {
	return {
		getMyInfo: function(){
			return UserRESTClient.get
		},

		get: function(id) {
			return UserRESTClient.get({id:id.id}).$promise;
		},

		getEdit:function(id){
			return UserRESTClient.getEdit({id:id.id})
		},

		post: function(user){
			return UserRESTClient.save(user).$promise;
		},

		all: function(){
			return UserRESTClient.query().$promise;
		},

		edit: function(user){
			return UserRESTClient.edit(user)
		}
	}
});