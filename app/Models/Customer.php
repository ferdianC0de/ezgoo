<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Customer extends Model
{
  public function bookings()
  {
    return $this->hasMany('Booking');
  }
}
