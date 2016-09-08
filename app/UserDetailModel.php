<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetailModel extends Model
{

    use SoftDeletes;

    protected static function boot() {
        parent::boot();

        static::deleting(function($user) {
            $user->userDetail()->delete();
        });
    }

    protected $table = 'user_details';

    protected $fillable = array('first_name', 'last_name','gender','dob');

    public function getTableName(){
        return $this->table;
    }

    public function user(){
        return $this->belongsTo('App\UserModel');
    }

}