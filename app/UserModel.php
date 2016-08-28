<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name', 'email', 'password');

    protected $table = 'users';

    public function getTableName(){
        return $this->table;
    }

    /**
     * Get the User Detail associated with the user.
     */
    public function userDetail()
    {
        return $this->hasOne('App\UserDetailModel');
    }
}