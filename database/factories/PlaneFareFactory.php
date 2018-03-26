<?php

use Faker\Generator as Faker;

$factory->define(App\Models\PlaneFare::class, function (Faker $faker) {
    static $num = 1;
    $unique = mt_rand(1, 999);
    $plane = App\Models\Plane::find($num);
    $array = ['A' => 100000, 'B' => 200000, 'C' => 300000];
    $rand = array_rand($array);
    $num++;
    return [
      'plane_id' => $plane->id,
      'eco_seat' => $array[$rand],
      'bus_seat' => $array[$rand],
      'first_seat' => $array[$rand],
      'unique_code' => $unique,
    ];
});
