<?php

use App\Product\Database\CustomBluePrint;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (BluePrint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
            $table->string('created_at_np');
            $table->string('updated_at_np');
//            $table->nepaliTimeStamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');

//        if(\Illuminate\Support\Facades\DB::hasTable('migrations')) {
//            Schema::drop('migrations');
//        }
//
//        if(\Illuminate\Support\Facades\DB::hasTable('password_resets')) {
//            Schema::drop('password_resets');
//        }

    }
}