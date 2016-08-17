<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $fillable = array('course_id', 'user_id');

    protected $table = 'course_user';
}
