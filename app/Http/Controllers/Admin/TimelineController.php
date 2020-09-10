<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Profile;
use App\User;


class TimelineController extends Controller
{
    public function index( Request $request)
    {
        $question = Question::get();
        $profile =Profile::get();
        
        $posts = Question::all()->sortByDesc('updated_at');
        
        return view('admin.timeline', ['question' => $question , 'profile' => $profile , 'posts' => $posts ]);
    
    }
    public function good($id)
  {
    Good::create([
      'question_id' => $id,
      'profile_id' => Auth::id(),
    ]);

    session()->flash('success', 'You Liked the Reply.');

    return redirect()->back();
  }
    
    

}
