<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $fillable = array('name', 'email', 'password');

    protected $table = 'users';
}
