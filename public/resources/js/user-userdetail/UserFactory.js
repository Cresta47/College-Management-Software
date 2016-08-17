app.factory('UserRESTClient', function ($resource) {
     return $resource('api/user/:id', {id: '@id'}, {
          getEdit: {method:'GET', url: 'api/user/:id/edit', isArray:false},
          edit: {method:'PUT', url:'api/user/:id'}
     });
});