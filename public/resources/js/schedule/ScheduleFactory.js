app.factory('ScheduleRESTClient', function ($resource) {
     return $resource('api/schedule/:id', {id: '@id'}, {
          'query': {method: 'GET', isArray: false }
     });
});