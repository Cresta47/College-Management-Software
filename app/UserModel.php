<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class UserModel extends Model
{
    use SoftDeletes;

    protected $fillable = array('name', 'email', 'password','created_at_np','updated_at_np');

    protected $table = 'users';

    public function getTableName(){
        return $this->table;
    }

    /**
     * Get the User Detail associated with the user.
     */
    public function userDetail(){
        return $this->hasOne('App\UserDetailModel','user_id');
    }


    /**
     * Get the User Detail associated with the user.
     */
    public function attendanceRecords(){
        return $this->hasMany('App\AttendanceModel','user_id');
    }

}