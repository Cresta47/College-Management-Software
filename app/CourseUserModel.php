<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseUserModel extends Model
{
    protected $fillable = array('course_id', 'user_id');

    protected $table = 'course_user';

    public function getTableName(){
        return $this->table;
    }
}
