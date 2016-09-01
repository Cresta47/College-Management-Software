app.factory('ExaminationRESTClient', function ($resource) {
     return $resource('api/examination/:id', {id: '@id'}, {
          'query': {method: 'GET', isArray: false }
     });
});