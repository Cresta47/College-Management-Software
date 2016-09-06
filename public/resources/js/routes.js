/**
 * Created by sadhikari on 8/14/2016.
 */

app.config(function($stateProvider, $urlRouterProvider) {
    $stateProvider

        // ATTENDANCE
        .state('takeAttendanceOfCourse', {
            url: '/attendance/take/course/{id}',
            views: {
                '': {templateUrl: 'partial/attendance-form'}
            }
        })

        .state('attendanceListCard', {
            url: '/attendance/all',
            views: {
                '': {templateUrl: 'partial/attendance-list-card'}
            }
        })

        // CLASS
        .state('classCreate', {
            url: '/class/create',
            views: {
                '': { templateUrl: 'partial/class-form' }
            }
        })

        // COURSE
        .state('courseCreate', {
            url: '/course/create',
            templateUrl: 'partial/course-form'
        })

        .state('courseListCard', {
            url: '/course/all',
            views: {
                '': {templateUrl: 'partial/course-list-card'}
            }
        })

        // DASHBOARD / HOME
        .state('dashboard',{
            url:'/my/home',
            views:{
                '': {templateUrl: 'partial/dashboard'}
            }
        })

        // EXAMINATION
        .state('examinationCreate', {
            url: '/examination/create',
            templateUrl: 'partial/examination-form'
        })

        .state('examinationListCard', {
            url: '/examination/all',
            views: {
                '': {templateUrl: 'partial/examination-list-card'}
            }
        })

        // GRADE
        .state('gradeCreate', {
            url: '/grade/create',
            templateUrl: 'partial/grade-form'
        })

        // MARKS
        .state('marksCreate', {
            url: '/marks/create',
            templateUrl: 'partial/marks-form'
        })

        .state('marksListCard', {
            url: '/marks/all',
            views: {
                '': {templateUrl: 'partial/marks-list-card'}
            }
        })

        // ROLE
        .state('roleCreate', {
            url: '/role/create',
            views: {
                '': {templateUrl: 'partial/role-form'}
            }
        })

        // SCHEDULE
        .state('scheduleCreate', {
            url: '/schedule/create',
            views: {
                '': {templateUrl: 'partial/schedule-form'}
            }
        })

        .state('scheduleListCard', {
            url: '/schedule/all',
            views: {
                '': {templateUrl: 'partial/schedule-list-card'}
            }
        })

        // USER
        .state('userCreate', {
            url: '/register',
            params: {
                stateTitle: 'Register',
                actionParams: {action:'create'},
            },
            views: {
                '': {templateUrl: 'partial/user-form'}
            }
        })

        .state('userListCard', {
            url: '/user/all',
            views: {
                '': {templateUrl: 'partial/user-list-card'}
            }
        })

        .state('userEdit', {
            url: '/user/edit/{id}',
            params: {
                stateTitle: 'Edit User',
                actionParams: {action:'edit'},
            },
            views: {
                '': {templateUrl: 'partial/user-form',
                },
            }
        })

    $urlRouterProvider.otherwise('/my/home');

});