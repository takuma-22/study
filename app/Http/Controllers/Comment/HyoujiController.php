<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HyoujiController extends Controller
{
     public function add()
    {
        return view('comment.hyouji');
        
    }
}
