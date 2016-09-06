<?php

use Illuminate\Database\Seeder;
use App\CourseUserModel;


class CourseUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $userLimit = 500;
        $coursePerUserLimit = 8;
        for($i=1; $i<=$userLimit ; $i++){
            for($j = 1 ; $j <= ( $coursePerUserLimit ); $j++){
                CourseUserModel::create([
                    'course_id' => $faker->numberBetween(1,50),
                    'user_id' => ($i)
                ]);
            }

        }


    }
}
