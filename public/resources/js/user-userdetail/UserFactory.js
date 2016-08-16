app.factory('UserRESTclient', function ($resource) {
     return $resource('api/user/:id', {id: '@id'}, {
          getEdit: {method:'GET', url: 'api/user/:id/edit'},
          edit: {method:'PUT', url:'api/user/:id'}
     });
});