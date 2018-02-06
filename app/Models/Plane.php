<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
<<<<<<< HEAD
    protected $fillable = ['plane_name','eco_seat','bus_seat'];
=======
    public function planeSchedule()
    {
      return $this->hasOne('App\Models\PlaneSchedule');
    }
    public function planeFare()
    {
      return $this->hasOne('App\Models\PlaneFare');
    }
>>>>>>> 1a2fd44d9059cfc4c5c637bd99bcce93ddad6f0a
}
