app.factory('ClassRESTclient', function ($resource) {
     return $resource('api/class/:id');
});