<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $fillable = array('name', 'building', 'room', 'floor');

    protected $table = 'classes';

    public function getTableName(){
        return $this->table;
    }
}