<?php

use Illuminate\Database\Seeder;
use App\RoomModel;


class RoomsTableSeeder extends Seeder
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

        $building = ['A','B','C'];

        for ($i = 0; $i < $limit; $i++) {
            \App\RoomModel::create([
                'name' => $faker->firstName,
                'building' => $faker->randomElement(array('A','B','C')),
                'room' => $faker->randomElement(array(1,2,3,4,5,6,7,8,9,10)),
                'floor' => $faker->randomElement(array(0,1,2,3)),
            ]);
        }
    }
}
