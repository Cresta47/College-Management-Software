/**
 * Created by sadhikari on 8/14/2016.
 */

app.config(function($stateProvider, $urlRouterProvider) {
    $stateProvider

        .state('classCreate', {
            url: '/class/create',
            views: {
                // the main template will be placed here (relatively named)
                '': { templateUrl: 'partial/class-form' },
                // 'createClassForm@classCreate' : {
                //     templateUrl: 'partial/class-form',
                //     controller: 'ClassFormController'
                // }
            }
        })

        .state('courseCreate', {
            url: '/course/create',
            templateUrl: 'partial/course-form'
        })

        .state('gradeCreate', {
            url: '/grade/create',
            templateUrl: 'partial/grade-form'
        })

    $urlRouterProvider.otherwise('/home');
});