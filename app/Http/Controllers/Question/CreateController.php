<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function add()
    {
        return view('question.create');
        
        
    }
    public function create(Request $request) 
    {
        $this -> $request->validate([ 
            'question' => ['genre', 'style', 'colans','kaisetu'], 
        ]);
        Question::create([ 
            'user_id' => Auth::user()->id, 
            'question' => $request->question, 
        ]);
        return back(); 
    }
    //
}
