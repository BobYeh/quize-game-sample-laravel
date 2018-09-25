<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
        	'question' => '1+1=?',
        	'option1' => '1',
        	'option2' => '2',
        	'option3' => '3',
        ]);

        DB::table('quizzes')->insert([
        	'question' => '2+2=?',
        	'option1' => '2',
        	'option2' => '4',
        	'option3' => '6',
        ]);

        DB::table('quizzes')->insert([
        	'question' => '3+1=?',
        	'option1' => '5',
        	'option2' => '2',
        	'option3' => '6',
        ]);
    }
}
