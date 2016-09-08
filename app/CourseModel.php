<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name', 'class_id');

    protected $table = 'courses';

    public function getTableName(){
        return $this->table;
    }

    public function user(){
//        return $this->belongsTo('CourseUser');
    }
}