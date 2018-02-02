<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaneSchedule extends Model
{
    public function plane()
    {
      return $this->belongsTo('App\Models\Plane');
    }
    public function airport()
    {
      return $this->belongsTo('App\Models\Airport');
    }
}
