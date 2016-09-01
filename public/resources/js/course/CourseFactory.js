app.factory('CourseRESTClient', function ($resource) {
    return $resource('api/course/:id', {id: '@id'}, {'query': {method: 'GET', isArray: false }});
});