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