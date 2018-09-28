<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    protected $table = 'quizzes';

    public static function getRandomQuizzes($count)
    {
    	return Quize::orderByRaw('RAND()')->take($count)->get();
    }

    public static function addQuize($question, $option1, $option2, $option3, $answer)
    {
    	 $id = Quize::insertGetId([
    	 	'question' => $question,
    	 	'option1' => $option1,
    	 	'option2' => $option2,
    	 	'option3' => $option3,
    	 	'answer' => $answer,
    	 ]);

    	 return $id;
    }
}
