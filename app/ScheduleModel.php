<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleModel extends Model
{
    protected $fillable = array('name');

    protected $table = 'schedules';

    public function getTableName(){
        return $this->table;
    }
}
