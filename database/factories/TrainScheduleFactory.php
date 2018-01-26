<?php

use Faker\Generator as Faker;
use App\Models\Train;
use App\Models\TrainStation;


$factory->define(App\Models\TrainSchedule::class, function (Faker $faker) {
  DB::table('train_schedules')->delete();

  $train = Train::first();
  $firstStation = TrainStation::first();
  $lastStation = TrainStation::find(2);
    return [
        'station_id' => $firstStation->id,
        'train_id' => $train->id,
        'from' => $firstStation->station_name,
        'destination' => $lastStation->station_name,
        'boarding_time' => date('Y-m-d H:i:s'),
    ];
});
