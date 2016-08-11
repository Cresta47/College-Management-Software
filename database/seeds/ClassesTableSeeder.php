<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            \DB::table('classes')->insert([ //,
                'name' => $faker->firstName,
                'building' => $faker->bankAccountNumber,
                'room' => $faker->bankAccountNumber,
                'floor' => $faker->numberBetween(0,100)
            ]);
        }
    }
}
