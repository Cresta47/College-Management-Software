<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $defaultRoles = Config::get('client.info')['defaultRoles'];
        $roleLimit = sizeof($defaultRoles);
        $userlimit = 500;

        for ($i = 1; $i <= $userlimit; $i++) {
            \DB::table('role_user')->insert([
                'role_id' => $faker->numberBetween(1,$roleLimit),
                'user_id' => $i
            ]);
        }
    }
}