<?php

use App\Product\Database\CustomBluePrint;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned(); // Create column to store foreign key first
            $table->foreign('course_id')->references('id')->on('courses'); // Setting Up Foreign key
            $table->integer('exam_id')->unsigned()->nullable();
            $table->foreign('exam_id')->references('id')->on('examinations');
            $table->string('name');
            $table->timestamps();
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
        Schema::drop('marks');
    }
}
