<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
    public function index( Request $request)
    {
        $question = Question::get();
        $profile =Profile::get();
        
        $posts = Question::all()->sortByDesc('updated_at');
        
        return view('home', ['question' => $question , 'profile' => $profile , 'posts' => $posts ]);
    
    }
}
