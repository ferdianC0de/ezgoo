<?php

use Faker\Generator as Faker;
use App\Models\Train;
use App\Models\TrainStation;


$factory->define(App\Models\TrainSchedule::class, function (Faker $faker) {
  DB::table('train_schedules')->delete();

  $rnd = rand(1, TrainStation::all()->count());
  $rnd2 = rand(1, TrainStation::all()->count());
  $train = Train::first();
  $dur = rand(1000, 2000);
  $firstStation = TrainStation::find($rnd);
  $lastStation = TrainStation::find($rnd2);
    return [
        'station_id' => $firstStation->id,
        'train_id' => $train->id,
        'from' => $firstStation->station_name,
        'from_code' => $firstStation->code,
        'destination' => $lastStation->station_name,
        'duration' => $dur,
        'destination_code' =>$lastStation->code,
        'eco_seat' => rand(1,10),
        'bus_seat' => rand(1,10),
        'exec_seat' => rand(1,10),
        'platform' => rand(1,99),
        'boarding_time' => date('Y-m-d H:i:s'),
    ];
});
