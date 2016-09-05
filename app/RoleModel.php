<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class RoleModel extends EntrustRole
{
    protected $table = 'roles';

    protected $fillable = array('name', 'display_name','description');

    public function getTableName(){
        return $this->table;
    }
}