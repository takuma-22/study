<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class CreateController extends Controller
{
    public function add()
    {
        return view('question.create');
        
        
    }
    public function create(Request $request) 
    {
        $this -> $request->validate([ 
            'question' => ['genre', 'style', 'colans','kaisetu','ans1','ans2','ans3','ans4','ans5',], 
        ]);
        
        $question = new Question;
        $form = $request->all();
        
        Question::create([ 
            'user_id' => Auth::user()->id, 
            'question' => $request->question, 
        ]);
        $question->fill($form);
        $question->save();
        return back();
        
    }
    //
}
