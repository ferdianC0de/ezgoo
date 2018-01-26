<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Train;
use App\Models\TrainStation;

class TrainSchedule extends Model
{
    public function train()
    {
      return $this->hasOne('Train');
    }
    public function train_station()
    {
      return $this->hasOne('TrainStation');
    }
}
