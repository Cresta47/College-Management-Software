<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            \DB::table('users')->insert([ //,
                'name' => $faker->bankAccountNumber,
                'email' => $faker->unique()->email,
                'password' => bcrypt($faker->randomNumber()),
            ]);
        }
    }
}