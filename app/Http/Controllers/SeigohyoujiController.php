<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class SeigohyoujiController extends Controller
{
    //
     public function index()
    {
        $question = Question::get();
        
        return view('seigohyouji', ['question' => $question  ]);
        
    }
}
