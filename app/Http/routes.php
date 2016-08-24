<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

//----------Restful Routes----------//

Route::resource('api/class','ClassController');

Route::resource('api/course','CourseController');

Route::resource('api/grade','GradeController');

Route::resource('api/user', 'UserController');

Route::resource('api/userdetail','UserDetailController');

Route::resource('api/role','RoleController');

Route::resource('api/permission','PermissionController');


//----------Session----------//
/*
 * We are using this endpoint only to test whether user is logged in or not.
 * As we send request to (any) this endpoint our ProductAuthentication.php middleware intercept the request and send
 * information about whether the user is logged in or not. Based on that User will see Login Page
 */
Route::get('session/ping', function(){
    return "Beep Beep Beep";
});

//----------Partials----------//

Route::get('partial/class-form', function(){
   return view('partials.class-form');
});

Route::get('partial/course-form', function(){
    return view('partials.course-form');
});

Route::get('partial/grade-form', function(){
    return view('partials.grade-form');
});

Route::get('partial/user-form', function(){
    return view('partials.user-form');
});

Route::get('partial/user-list-card',function(){
    return view('partials.user-list-card');
});

Route::get('partial/class-list-card', function(){
   return view('partials.class-list-card');
});

Route::get('partial/course-list-card', function(){
    return view('partials.course-list-card');
});

Route::get('partial/role-form', function(){
    return view('partials.role-form');
});

Route::get('partial/login-form', function(){
    return view('partials.login-form');
});

Route::get('partial/dashboard', function(){
    return view('partials.dashboard');
});
