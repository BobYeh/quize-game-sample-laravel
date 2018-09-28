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
}
