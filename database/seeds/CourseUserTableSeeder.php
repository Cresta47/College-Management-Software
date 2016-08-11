<?php

use Illuminate\Database\Seeder;

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

        for($j = 1 ; $j <= ( $coursePerUserLimit ); $j++){
            for($i=1; $i<=$userLimit ; $i++){
                \DB::table('course_user')->insert([
                    'course_id' => $faker->numberBetween(1,50),
                    'user_id' => ($i)
                ]);
            }

        }


    }
}
