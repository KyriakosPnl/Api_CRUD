<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate our existing records
        Course::truncate();

        $faker = \Faker\Factory::create();

        // Create some Courses in our database:
        for ($i = 0; $i < 20; $i++) { 
            Course::create([ 
            'course_id'=> $faker->unique()->numberBetween(1000, 9999),
            'teacher' => $faker->name,
            'teachers_mail'=>$faker->email,
            'publisher'=>'admin1',
            'url'=>$faker->url



            ]);
            }
    
    }
}
