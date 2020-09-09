<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Profile;
use App\User;
use App\Comment;

class HyoujiController extends Controller
{
     public function index()
    {   
        $comment = Comment::get();
        $profile =Profile::get();
        
        $posts = Comment::all()->sortByDesc('updated_at');
    
        return view('comment.hyouji', ['comment' => $comment , 'posts' => $posts , 'profile' => $profile]);
       
        
        
    }
}
