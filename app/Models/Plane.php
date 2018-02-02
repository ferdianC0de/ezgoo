<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    public function planeSchedule()
    {
      return $this->hasOne('App\Models\PlaneSchedule');
    }
    public function planeFare()
    {
      return $this->hasOne('App\Models\PlaneFare');
    }
}
