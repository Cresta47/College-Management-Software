<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetailModel extends Model
{
    protected $table = 'user_details';

    protected $fillable = array('first_name', 'last_name','gender','dob');

    public function getTableName(){
        return $this->table;
    }

    public function user(){
        return $this->belongsTo('App\UserModel','id');
    }

}
