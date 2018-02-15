<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBooking extends Model
{
	protected $fillable = ['booking_id','fare','passenger','class'];
    public function passengers()
    {
      return $this->hasMany('App\Models\Passenger');
    }
}
