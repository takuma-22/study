<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class ToukouController extends Controller
{
    public function add()
    {
        return view('comment.toukou');
        }
        public function create(Request $request) 
    {
        $this->validate($request,Comment::$rules);
        
        $comment = new Comment;
        $form = $request->all();
        
        Comment::create([ 
            'profiles_id' => Auth::profile()->id, 
            'question_id' => Auth::question()->id, 
            'comment' => $request->comment, 
        ]);
        $comment->fill($form);
        $comment->save();
        return back();
        
    }
    public function index(Request $request)
  {
      
      return view('comment.hyouji', ['posts' => $posts, ]);
  }

}

