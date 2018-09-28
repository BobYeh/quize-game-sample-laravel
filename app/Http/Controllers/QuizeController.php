<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Http\Model\Quize;

class QuizeController extends Controller
{
    public function getQuize($id)
    {
    	return Quize::where('id', $id)
    				->get();
    }
}
