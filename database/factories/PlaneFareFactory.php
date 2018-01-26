<?php

use Faker\Generator as Faker;
use App\Models\Plane;

$factory->define(App\Models\PlaneFare::class, function (Faker $faker) {
  DB::table('plane_fares')->delete();
  $rnd = rand(1,99);
  $plane = Plane::find($rnd);

    $array = ['A'=> 5000,'B'=>10000,'C'=>15000];
    $selectAOrBOrC = array_rand($array);
    $randomPrice = $array[$selectAOrBOrC];

    return [
        //
        'plane_id' => $plane->id,
        'eco_seat' => $randomPrice,
        'bus_seat' => $randomPrice,
    ];
});
