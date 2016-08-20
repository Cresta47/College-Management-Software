<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = 'roles';

    protected $fillable = array('name');

    public function getTableName(){
        return $this->table;
    }
}
