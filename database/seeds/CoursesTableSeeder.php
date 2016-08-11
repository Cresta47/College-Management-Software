<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            \DB::table('courses')->insert([ //,
                'name' => $faker->unique()->bankAccountNumber,
                'class_id' => $faker->numberBetween(1,100)
            ]);
        }
    }
}
