app.factory('GradeRESTclient', function ($resource) {
    return $resource('api/grade/:id');
});