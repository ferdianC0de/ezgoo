<?php

use Faker\Generator as Faker;

$factory->define(App\Models\PlaneSchedule::class, function (Faker $faker) {
    $planeNum = App\Models\Plane::all()->count();
    $airportNum = App\Models\Airport::all()->count();
    a:
    $randPlane = rand(1, $planeNum);
    $randFrom = rand(1, $airportNum);
    $randDestination = rand(1, $airportNum);
    if ($randFrom == $randDestination) {
      goto a;
    }
    $plane = App\Models\Plane::find($randPlane);
    $fromAirport = App\Models\Airport::find($randFrom);
    $destinationAirport = App\Models\Airport::find($randDestination);
    return [
      'airport_id' => $fromAirport->id,
      'plane_id' => $plane->id,
      'from' => $fromAirport->airport_name,
      'from_code' => $fromAirport->code,
      'destination' => $destinationAirport->airport_name,
      'destination_code' => $destinationAirport->code,
      'boarding_time' => date('Y-m-d H:i:s', strtotime('+7 days')),
      'duration' => strtotime(date('H:i')),
      'gate' => chr(rand(65,90)),
      'eco_seat' => $plane->eco_seat,
      'bus_seat' => $plane->bus_seat,
      'first_seat' => $plane->first_seat
    ];
});
