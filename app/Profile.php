<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public static $rules = array(
        'name' => 'required',
        'image_path' => 'required',
        'profile' => 'required',
        
    );
    //
}
