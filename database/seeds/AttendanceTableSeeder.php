<?php

use Illuminate\Database\Seeder;
use App\AttendanceModel;

class AttendanceTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker\Factory::create();
        $limit = 500;
        for ($i = 1; $i <= $limit; $i++) {
            $attendanceDate = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get());
            for($j= 0 ; $j < 60; $j++){
               AttendanceModel::create([
                    'user_id' => $i,
                    'in_or_out' => $faker->randomElement(array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,0)),
                    'created_at' => $attendanceDate,
                ]);
            }
        }
    }
}