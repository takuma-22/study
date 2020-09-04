<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = array('id');
    
    public function good()
  {
    return $this->hasMany(Good::class, 'good');
  }
  public function is_good_by_auth_user()
  {
    $id = Auth::id();

    $good = array();
    foreach($this->good as $good) {
      array_push($goods, $good->user_id);
    }

    if (in_array($id, $goods)) {
      return true;
    } else {
      return false;
    }
  }

}