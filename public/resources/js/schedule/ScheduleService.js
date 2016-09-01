var ScheduleService = app.service('ScheduleService', function (ScheduleRESTClient) {
	return {
		get: function(id) {
			return ScheduleRESTClient.get({id:id.id}).$promise;
		},

		getEdit:function(id){
			return ScheduleRESTClient.getEdit({id:id.id})
		},

		post: function(schedule){
			return ScheduleRESTClient.save(schedule).$promise;
		},

		all: function(){
			return ScheduleRESTClient.query().$promise;
		},

		edit: function(schedule){
			return ScheduleRESTClient.edit(schedule)
		}
	}
});