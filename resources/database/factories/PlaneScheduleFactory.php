<?php

use Faker\Generator as Faker;
use App\Models\Plane;
use App\Models\Airport;

$factory->define(App\Models\PlaneSchedule::class, function (Faker $faker) {
DB::table('plane_schedules')->delete();

    a:
    $nums = Airport::all()->count();
    $numssss = Plane::all()->count();
    $rnd = rand(1,$numssss);
    $plane = Plane::find($rnd);
    $num1 = rand(1,$nums);
    $num2 = rand(1,$nums);
    $firstAirport = Airport::find($num1);
    $lastAirport = Airport::find($num2);

    if ($lastAirport == $firstAirport) {
      goto a;
    }

    return [
        'airport_id' => $firstAirport->id,
        'plane_id' => $plane->id,
        'destination' => $lastAirport->airport_name,
<<<<<<< HEAD
        'from' => $firstAirport->city,
=======
        'from' => $firstAirport->airport_name,
>>>>>>> 91ae2826c881ac069d3d08f2208337d7458a31e3
        'boarding_time' => date('Y-m-d H:i:s'),
        'duration' => rand(1,99),
        'gate' => rand(1,99),
        'eco_seat' => rand(1,10),
        'bus_seat' => rand(1,10),
        'first_seat' => rand(1,10),
    ];
});
