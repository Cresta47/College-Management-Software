<?php

use Illuminate\Database\Seeder;
use App\GradeModel;
use Illuminate\Support\Facades\Config;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker\Factory::create();

        $gradeList = Config::get('client.defaults')['gradeList'];

        $sectionList = Config::get('client.defaults')['sectionList'];

        foreach( $gradeList as $gradeName =>  $value ) {
            if(!is_array($value)){
                GradeModel::create([
                    'name' => $value
                ]);
            }else{
                foreach($value as $individualGrade){
                    GradeModel::create([
                        'name' => $gradeName.' '.$individualGrade,
                    ]);
                }
            }


        }
    }



    private function parseAndGet($nameString){
        $result = array();
        list($name, $shortName, $session) = pregSplit('|',$nameString);

        

    }











}
