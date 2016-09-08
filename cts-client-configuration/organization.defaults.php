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
    'studentTeacherRatio' => array(1,1,1,1,1,
                                1,1,1,1,1,
                                1,1,1,1,1,
                                0),
    'attendanceStartDate' => '',

    'courseList' =>  array('Math',
        'Science',
        'English',
        'Music',
        'Dance',
        'Social Studies',
        'Health',
        'Physical Education',
        'Debate',
        'Drawing',
        'Social Studies',
        'Nepali',
        'Population and Environment Education',
        'Botany',
        'Zoology',
        'Statistics',
        'Calculus',
        'Accounting',
        'Business Math',
        'Civics',
        'Economics',
        'Political Science',
        'Social Studies',
    ),


    /*
     * Default Grades are in following pattern
     * 'NAME | SHORT-NAME | YEARS-SEMESTERS_OR_TRIMESTERS'
     */
    'gradeList' => array(
        '1 | 1 | 1Y',
        '2 | 2 | 1Y',
        '3 | 3 | 1Y',
        '4 | 4 | 1Y',
        '5 | 5 | 1Y',
        '6 | 6 | 1Y',
        '7 | 7 | 1Y',
        '8 | 8 | 1Y',
        '9 | 9 | 1Y',
        '10 | 10 | 1Y',
        '+2 First (I) Year | +2 I year | 1Y',
        '+2 Second (II) Year | +2 II year | 1Y',
        'Kindergarten | KG | 1Y',
        'Lower Kindergarten | LKG | 1Y',
        'Upper Kindergarten | UKG | 1Y',
        'Pre-School | Pre-School | 1Y',

        'Bachelors in' => array(
            'Arts | BA | 3Y',
            'Computer Engineering | BCE | 4Y-8SEM',
            'Business Administration | BBA | 4Y-8SEM'
        ),

        'Masters in' => array(
            'Arts | MA | 3Y',
            'Computer Engineering | MCE | 2Y-4SEM',
            'Business Administration | MBA | 2Y-4SEM',
        ),

    ),

    'buildings' => array('A', 'B', 'C'),

    'floors' => array(0,1,2,3),

    'rooms' => array(1,2,3,4,5,6,7,8,9,10),

];