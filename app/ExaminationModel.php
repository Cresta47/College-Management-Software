<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExaminationModel extends Model
{
    protected $fillable = array('name');

    protected $table = 'examinations';

    public function getTableName(){
        return $this->table;
    }
}