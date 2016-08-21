<?php

use Illuminate\Database\Seeder;
use App\GradeModel;


class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            GradeModel::create([
                'name' => $i+1
            ]);
        }
    }
}
