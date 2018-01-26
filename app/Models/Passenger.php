<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailBooking;

class Passenger extends Model
{
    public function detail_booking()
    {
      return $this->hasOne('DetailBooking');
    }
}
