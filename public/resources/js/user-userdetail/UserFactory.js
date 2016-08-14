app.factory('UserRESTclient', function ($resource) {
     return $resource('api/user/:id', {id: '@id'}, {
          edit: {method:'GET', url: 'api/user/:id/edit'}
     });
});