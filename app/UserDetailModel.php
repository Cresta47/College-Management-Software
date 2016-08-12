<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetailModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_details';
	
	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
	
	/**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mysql';



	
}
