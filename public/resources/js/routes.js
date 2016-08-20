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
            url: '/user/create',
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

        .state('classListCard', {
            url: '/get-me/my-classes',
            views: {
                '': {templateUrl: 'partial/class-list-card'}
            }
        })

        .state('courseListCard', {
            url: '/get-me/my-courses',
            views: {
                '': {templateUrl: 'partial/course-list-card'}
            }
        })

        .state('roleCreate', {
            url: '/role/create',
            views: {
                '': {templateUrl: 'partial/role-form'}
            }
        })


        .state('userListCard', {
            url: '/user/listCard',
            views: {
                '': {templateUrl: 'partial/user-list-card'}
            }
        }),

    $urlRouterProvider.otherwise('/home');
});