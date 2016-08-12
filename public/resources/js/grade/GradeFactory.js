app.factory('ClassRESTclient', function ($resource) {
    return $resource('api/grade/:id');
});