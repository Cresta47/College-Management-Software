var ExaminationService = app.service('ExaminationService', function (ExaminationRESTClient) {
	return {
		get: function(id) {
			return ExaminationRESTClient.get({id:id.id}).$promise;
		},

		getEdit:function(id){
			return ExaminationRESTClient.getEdit({id:id.id})
		},

		post: function(examination){
			return ExaminationRESTClient.save(examination).$promise;
		},

		all: function(){
			return ExaminationRESTClient.query().$promise;
		},

		edit: function(examination){
			return ExaminationRESTClient.edit(examination)
		}
	}
});