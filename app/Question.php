<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = array('id');
    public static $rules=array(
        
        'profiles_id'=>'required',
        'genre'=>'required',
        'text'=>'required',
        'style'=>'required',
        'colans'=>'required',
        'kaisetu'=>'required',
        'ans1'=>'required',
        'ans2'=>'required',
        'ans3'=>'required',
        'ans4'=>'required',
        'ans5'=>'required',
        
        
        );
    

}