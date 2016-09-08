<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradeModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name');

    protected $table = 'grades';

    public function getTableName(){
        return $this->table;
    }
}
