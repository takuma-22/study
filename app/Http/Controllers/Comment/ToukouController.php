<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToukouController extends Controller
{
    public function add()
    {
        return view('comment.toukou');
        }
}

