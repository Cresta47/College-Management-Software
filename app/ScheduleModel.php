<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name');

    protected $table = 'schedules';

    public function getTableName(){
        return $this->table;
    }
}
