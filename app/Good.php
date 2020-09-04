<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
     protected $guarded = array('id');
     
     public function reply()
  {
    return $this->belongsTo(Question::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
    //
}
