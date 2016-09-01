<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarksModel extends Model
{
     protected $fillable = array('name', 'course_id', 'exam_id');

    protected $table = 'marks';

    public function getTableName(){
        return $this->table;
    }}
