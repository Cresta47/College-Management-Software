<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    protected $fillable = array('name');

    protected $table = 'grades';
}
