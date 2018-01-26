<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Booking extends Model
{
    public function customer()
    {
      return $this->hasOne('Customer');
    }
}
