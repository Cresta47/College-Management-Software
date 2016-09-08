<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MarksModel extends Model
{
    use SoftDeletes;

    protected $fillable=['name','exam_id','course_id'];

    protected $table='marks';
}
