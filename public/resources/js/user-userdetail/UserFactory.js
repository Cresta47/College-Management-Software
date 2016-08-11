app.factory('UserRESTclient', function ($resource) {
     return $resource('api/user/:id');
});