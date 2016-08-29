<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $defaultRolePermission = Config::get('client.config')['permissions'];

        foreach ( $defaultRolePermission as $key => $value) {
            \DB::table('permissions')->insert([
                'name' => $key,
                'description' => $key . ' : ' . $value[0],
            ]);
        }
    }
}