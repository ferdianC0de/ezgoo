<?php

use Faker\Generator as Faker;
use App\Models\Plane;

$factory->define(App\Models\PlaneFare::class, function (Faker $faker) {
  DB::table('plane_fares')->delete();
  $num = 0;
  $rnd = $num +2;
  $plane = Plane::find($rnd);
  $array = ['A'=> 5000,'B'=>10000,'C'=>15000];
  $abc = array_rand($array);
  $price = $array[$abc];


    return [
        //
        'plane_id' => $plane->id,
        'eco_seat' => $price,
        'bus_seat' => $price,
        'first_seat' => $price,
    ];
});
