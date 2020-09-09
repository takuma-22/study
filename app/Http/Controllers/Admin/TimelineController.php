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
    
    

}
