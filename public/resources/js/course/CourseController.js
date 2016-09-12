// app.controller('CourseController', function ($scope, CourseService, SessionService) {
//     $scope.loadCourse = function () {
//         CourseService.get({id:1}).then(function(response) {
//             $scope.course = response.data;
//         });
//     }
//     $scope.loadCourse();
// });


app.controller('CourseFormController', function ($scope,CourseService) {

    $scope.course = {};
    $scope.course.name;
    $scope.course.class_id;
    $scope.course.grade_id;

    $scope.loadCourse = function () {
        $scope.course = CourseService.get({id:$scope.params.id});
    }

    $scope.createCourse = function () {
        course = {name:$scope.course.name,
            class_id:$scope.course.class_id,
            grade_id:$scope.course.grade_id,
        }

        
        CourseService.post(course).then(function(response){
             alert('Course successfully added in the system.'+'\n'+'Check console.log for response.');
             console.log(response.data);
         });

    }
});


app.controller('CourseListCardsController', function ($scope, $interval , CourseService, FilterService) {

    $scope.courses;
    $scope.courseUsers = [];

    // View Options
    $scope.showCards = true;
    $scope.showTable = false;

    $scope.gridOptions = {
        data: 'courses',
         columnDefs:
            [   {field: 'name', displayName: 'Name',width: 100 },
                {field: 'class_id', displayName: 'Class ID', width: 100},
                {field: 'grade_id', displayName: 'Grade ID', width: 100},
            ],
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
    };

    $scope.loadAll = function(){
        CourseService.all().then(function(response) {
            $scope.courses = response.data;
            $scope.loadCourseStudent();
        });
    }

    $scope.loadCourseStudent = function(){
        var courseIds = [];
        $scope.courses.forEach(function(course){
            courseIds.push(course.id);

        });
        FilterService.filterUserByCourse(courseIds);
    }

    $scope.loadAll();
});