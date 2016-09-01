/**
 * Created by sadhikari on 8/14/2016.
 */

app.config(function($stateProvider, $urlRouterProvider) {
    $stateProvider

        .state('classCreate', {
            url: '/class/create',
            views: {
                '': { templateUrl: 'partial/class-form' }
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

        .state('userCreate', {
            url: '/register',
            views: {
                '': {templateUrl: 'partial/user-form'}
            }
        })

        .state('userEdit', {
            url: '/user/edit/{id}',
            views: {
                '': {templateUrl: 'partial/user-form',
                    },
                params: { partialTitle: 'Edit User', }
            }
        })

        .state('roleCreate', {
            url: '/role/create',
            views: {
                '': {templateUrl: 'partial/role-form'}
            }
        })

        .state('dashboard',{
           url:'/my/home',
            views:{
                '': {templateUrl: 'partial/dashboard'}
            }
        })

        .state('userListCard', {
            url: '/user/all',
            views: {
                '': {templateUrl: 'partial/user-list-card'}
            }
        })

        .state('courseListCard', {
            url: '/course/all',
            views: {
                '': {templateUrl: 'partial/course-list-card'}
            }
        })

        .state('attendanceListCard', {
            url: '/attendance/all',
            views: {
                '': {templateUrl: 'partial/attendance-list-card'}
            }
        })

        .state('attendanceCreate', {
            url: '/attendance/create',
            views: {
                '': {templateUrl: 'partial/attendance-form'}
            }
        })

        .state('examinationListCard', {
            url: '/examination/all',
            views: {
                '': {templateUrl: 'partial/examination-list-card'}
            }
        })

        .state('examinationCreate', {
            url: '/examination/create',
            templateUrl: 'partial/examination-form'
        })

    $urlRouterProvider.otherwise('/my/home');
});