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
        $this->validate($request,Question::$rules);
        
        $question = new Question;
        $form = $request->all();
        
        Question::create([ 
            'profiles_id' => Auth::profile()->id, 
            'question' => $request->question, 
        ]);
        $question->fill($form);
        $question->save();
        return back();
        
    }
    public function index(Request $request)
  {
      
      return view('admin.timeline', ['posts' => $posts, ]);
  }
    //
}
