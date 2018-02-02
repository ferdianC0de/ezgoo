<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaneFare extends Model
{
    public function plane()
    {
      return $this->belongsTo('App\Models\Plane');
    }
}
