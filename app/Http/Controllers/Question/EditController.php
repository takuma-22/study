<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class EditController extends Controller
{
    public function add()
    {
        return view('question.edit');
        
    }
    public function edit(Request $request){
        $question= Question::find($request->id);
        return view('admin.profile.edit',['question_form'=> $question]);
    }
    //
}
