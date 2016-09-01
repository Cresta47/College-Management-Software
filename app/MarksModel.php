<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarksModel extends Model
{
    protected $fillable=['name','exam_id','course_id'];

    protected $table='marks';
}
