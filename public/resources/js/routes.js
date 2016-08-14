/**
 * Created by sadhikari on 8/14/2016.
 */

app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider

        .state('class.create', {
            url: '/class/create',
            templateUrl: 'partial/class-form'
        })

        .state('course.create', {
            url: '/course/create',
            templateUrl: 'partial/course-form'
        })

        .state('grade.create', {
            url: '/grade/create',
            templateUrl: 'partial/grade-form'
        })
});