<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 9/8/2016
 * Time: 2:53 PM
 */

return [

    'users' => 500,

    'coursesPerUser' => 8,

    'defaultRoles' => array('Student','Teacher'), // ! - Order or value should not be changed - ! //

    'studentTeacherRatio' => array(
                                1,1,1,1,1,1,
                                1,1,1,1,1,1,
                                1,1,1,1,1,1,
                                0),

    'presentAbsentRatio' => array(
                                1,1,1,1,1,
                                1,1,1,1,1,
                                1,1,1,1,1,
                                1,1,1,1,1,
                                0
                                ),

    'attendanceStartDate' => '2016-07-25 10:01:01',

];