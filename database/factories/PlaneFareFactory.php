<?php

use Faker\Generator as Faker;
use App\Models\Plane;

$factory->define(App\Models\PlaneFare::class, function (Faker $faker) {
  DB::table('plane_fares')->delete();
  $rnd = rand(1,99);
  $plane = Plane::find($rnd);

    $array = ['A'=> 5000,'B'=>10000,'C'=>15000];
    $bac = array_rand($array);
    $abc = array_rand($array);
    $priceEco = $array[$bac];
    $priceBus = $array[$abc];

    return [
        //
        'plane_id' => $plane->id,
        'eco_seat' => $priceEco,
        'bus_seat' => $priceBus,
    ];
});
