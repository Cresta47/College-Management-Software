<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $fillable = array('name', 'class_id');

    protected $table = 'courses';

    public function getTableName(){
        return $this->table;
    }
}
