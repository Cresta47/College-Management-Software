<?php

use Illuminate\Database\Seeder;


class GradeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $userlimit = 500;
        $gradeLimit = 10;

        for ($i = 1; $i <= $userlimit; $i++) {
                \DB::table('grade_user')->insert([
                    'grade_id' => $faker->numberBetween(1,10),
                    'user_id' => $i
                ]);
        }
    }
}
