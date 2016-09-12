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
    
    public function courses(){
		return $this->belongsToMany('App\CourseModel','course_user','user_id','course_id');
	}
	
	public function grades(){
		return $this->belongsToMany('App\GradeModel','grade_user','user_id','grade_id');
	}
}
