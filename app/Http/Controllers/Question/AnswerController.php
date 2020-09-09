<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class AnswerController extends Controller
{
    //
    public function index()
    {
        $question = Question::get();
        
        return view('question.answer', ['question' =>$question ]);
        
    }
}
