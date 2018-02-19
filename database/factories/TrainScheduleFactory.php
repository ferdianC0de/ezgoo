<?php

use Faker\Generator as Faker;
use App\Models\Train;
use App\Models\TrainStation;


$factory->define(App\Models\TrainSchedule::class, function (Faker $faker) {
  DB::table('train_schedules')->delete();

  $rnd = rand(1, TrainStation::all()->count());
  $rnd2 = rand(1, TrainStation::all()->count());
  $train = Train::first();
  $firstStation = TrainStation::find($rnd);
  $lastStation = TrainStation::find($rnd2);
    return [
        'station_id' => $firstStation->id,
        'train_id' => $train->id,
        'from' => $firstStation->station_name,
        'from_code' => $firstStation->code,
        'destination' => $lastStation->station_name,
        'destination_code' =>$lastStation->code,
        'boarding_time' => date('Y-m-d H:i:s'),
    ];
});
