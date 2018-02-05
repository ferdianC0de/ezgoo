<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainFare extends Model
{
    public function train()
    {
      return $this->belongsTo('App\Models\Train');
    }
}
