<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttendanceModel extends Model
{
	use SoftDeletes;

    protected $table = 'attendance';

    protected $fillable = array('user_id', 'in_or_out','comment');

    public function getTableName(){
        return $this->table;
    }

    /**
     * Get the User associated with the user.
     */
//    public function user(){
//        return $this->belongsTo('App\UserModel');
//    }

}
