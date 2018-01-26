<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Train;

class TrainFare extends Model
{
    public function train()
    {
      return $this->hasOne('Train');
    }
}
