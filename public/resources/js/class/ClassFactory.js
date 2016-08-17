app.factory('ClassRESTClient', function ($resource) {
     return $resource('api/class/:id',{
     },
     {
         userClasses: {method:'GET', params:{ 'get-me' : 'my-classes'}, url: 'api/class'}
     }
     );
});