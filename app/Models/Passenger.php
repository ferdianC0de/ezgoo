<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailBooking;

class Passenger extends Model
{
	protected $fillable = ['name'];


    public function detail_booking()
    {
      return $this->hasOne('App\Models\DetailBooking');
    }
}
