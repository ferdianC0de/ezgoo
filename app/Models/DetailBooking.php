<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBooking extends Model
{
  public function passengers()
  {
    return $this->hasMany('Passengers');
  }
}
