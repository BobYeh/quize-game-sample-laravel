<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class QuizeController extends Controller
{
    public function getQuize($id)
    {
    	return DB::table('quizzes')
    	->where('id', $id)
    	->get();
    }
}
