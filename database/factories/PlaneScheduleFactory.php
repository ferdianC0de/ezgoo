<?php

use Faker\Generator as Faker;
use App\Models\Plane;
use App\Models\Airport;

$factory->define(App\Models\PlaneSchedule::class, function (Faker $faker) {
DB::table('plane_schedules')->delete();

  $plane = Plane::first();
  $firstAirport = Airport::first();
  $lastAirport = Airport::find(2);
    return [
        'airport_id' => $firstAirport->id,
        'plane_id' => $plane->id,
        'destination' => $lastAirport->airport_name,
        'from' => $firstAirport->airport_name,
        'boarding_time' => date('Y-m-d H:i:s'),
        'gate' => str_random(2),
    ];
});
