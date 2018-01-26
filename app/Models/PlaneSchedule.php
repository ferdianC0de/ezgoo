<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Airport;
use App\Models\Plane;
use App\Models\Plane;

class PlaneSchedule extends Model
{
    public function plane()
    {
      return $this->hasOne('Plane');
    }
    public function airport()
    {
      return $this->hasOne('Airport');
    }
}
