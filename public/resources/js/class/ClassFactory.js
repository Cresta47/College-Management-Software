app.factory('ClassRESTclient', function ($resource) {
     return $resource('api/class/:id',{
          getMyClasses: {method:'GET', params:{getme: 'myclasses'}, url: 'api/class'}
     });
});