<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainSchedule extends Model
{
    public function train()
    {
      return $this->belongsTo('App/Models/Train');
    }
    public function trainStation()
    {
      return $this->belongsTo('App/Models/TrainStation');
    }
}
