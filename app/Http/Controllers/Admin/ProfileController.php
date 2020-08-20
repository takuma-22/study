<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile');
    }
    public function create(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $user->image_path = basename($path);
        }
        else {
            $user->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $user->fill($form);
        $user->save();
        return redirect('admin/profile');
        
    }
    //
}
