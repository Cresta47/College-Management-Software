app.factory('UserRESTClient', function ($resource) {
     return $resource('api/user/:id', {id: '@id'}, {
          'query': {method: 'GET', isArray: false }
     });
});