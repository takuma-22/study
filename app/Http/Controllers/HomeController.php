<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function like($id)
    {
        Good::create([
            'question_id' => $id,
            'user_id' => Auth::id(),
    ]);
    
    return redirect()->back();
    }
    
    public function unlike($id)
    {
        $Good = Good::where('question_id', $id)->where('user_id', Auth::id())->first();
        $Good->delete();
        
        return redirect()->back();
    }
}
