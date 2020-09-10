<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
     protected $guarded = array('id');
     
     public function question()
  {
    return $this->belongsTo(Question::class);
  }

  public function profile()
  {
    return $this->belongsTo(Profile::class);
  }
    //
}
