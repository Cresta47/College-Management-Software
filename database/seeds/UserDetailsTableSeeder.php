<?php
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 500;

        for ($i = 1; $i <= $limit; $i++) {
            \DB::table('user_details')->insert([
                'user_id' => $i,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName
            ]);
        }
    }
}