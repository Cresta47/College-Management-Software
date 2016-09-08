<?php
/**
 * Created by PhpStorm.
 * User: sadhikari
 * Date: 8/29/2016
 * Time: 6:58 PM
 */

return array(

    'permissions' => array(

        'Principal' => array(
            'can-delete-any-user',
        ),

        'Vice Principal' => array(
            'can-delete-own-user',
        ),

        'HOD' => array(
            'can-edit-own-user',
        ),

        'Teacher' => array(
            'can-edit-own-user',
        ),

        'Student' => array(
            'can-view-own-profile'
        )
    )


);