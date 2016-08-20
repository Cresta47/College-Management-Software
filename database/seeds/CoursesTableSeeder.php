<?php

use Illuminate\Database\Seeder;

use App\CourseModel;

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

        $subjectList =  array('Math',
            'Science',
            'English',
            'Music',
            'Dance',
            'Social Studies',
            'Health',
            'Physical Education',
            'Poetry',
            'Debate',
            'Drawing',
            'Social Studies',
            'Photography',
            'Nepali',
            'Population and Environment Education',
            'Botany',
            'Zoology',
            'Ecology',
            'Spanish',
            'Statistics',
            'Accounting',
            'Consumer Math',
            'Calculus',
            'Business Math',
            'Civics',
            'Economics',
            'Political Science',
            'Social Sciences',
            'Psychology',
            'Sociology',
            'Anthropology',
            'Genealogy',
            'Philosophy'
        );

        for ($i = 0; $i < $limit; $i++) {
            CourseModel::create(
                array(
                    'name' => $faker->randomElement($subjectList),
                    'class_id' => $faker->numberBetween(1,100)
                    )
            );
        }
    }
}