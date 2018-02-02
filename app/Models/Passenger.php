<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    public function detail_booking()
    {
      return $this->hasOne('App\Models\DetailBooking');
    }
}
