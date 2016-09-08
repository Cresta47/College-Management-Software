<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExaminationModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name');

    protected $table = 'examinations';

    public function getTableName(){
        return $this->table;
    }
}