<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class PermissionModel extends EntrustPermission{

    protected $fillable = array('name');

    protected $table = 'permissions';

    public function getTableName(){
        return $this->table;
    }

}
