<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Plane::class, function (Faker $faker) {
  $array = ['A'=>'10','B'=>'20','C'=>'30'];
  $rand  = array_rand($array);
    return [
        'plane_name' => $faker->firstName.' plane',
        'eco_seat' => $array[$rand],
        'bus_seat' => $array[$rand],
        'first_seat' => $array[$rand]
    ];
});
