<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class UserModel extends Model
{
    use EntrustUserTrait;

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
        return $this->hasOne('App\UserDetailModel','user_id','user_id');
    }

    public function roles(){
        return $this->hasMany('App\Role');
    }



}