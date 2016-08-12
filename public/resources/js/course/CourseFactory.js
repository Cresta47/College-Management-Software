app.factory('CourseRESTclient', function ($resource) {
    return $resource('api/course/:id');
});