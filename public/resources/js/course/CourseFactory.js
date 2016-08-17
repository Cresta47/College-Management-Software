app.factory('CourseRESTClient', function ($resource) {
    return $resource('api/course/:id',{
        },
        {
            userCourses: {method:'GET', params:{ 'get-me' : 'my-courses'}, url: 'api/course'}
        }
    );
});