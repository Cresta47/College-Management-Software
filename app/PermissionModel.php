<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model{

    protected $fillable = array('name');

    protected $table = 'permissions';

    public function getTableName(){
        return $this->table;
    }


}
