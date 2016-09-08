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

        $date = '2016-07-01 10:01:01';
        $endDate = '2016-09-01 10:01:01';

        while (strtotime($date) <= strtotime($endDate)) {
            for ($i = 1; $i <= $limit; $i++) {
                AttendanceModel::create([
                    'user_id' => $i,
                    'in_or_out' => $faker->randomElement(array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,0)),
                    'created_at' => $date,
                ]);
            }
            $date = date ("Y-m-d H:i:s", strtotime("+1 day", strtotime($date)));
        }
    }
}