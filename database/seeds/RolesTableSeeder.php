<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
        $roleLimit = sizeof($defaultRoles) - 1;

        for ($i = 0; $i <= $roleLimit; $i++) {
            \DB::table('roles')->insert([
                'name' => $defaultRoles[$i],
            ]);
        }
    }
}
