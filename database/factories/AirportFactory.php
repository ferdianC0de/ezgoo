<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Airport::class, function (Faker $faker) {
  DB::table('airports')->delete();
    return [
        //
        'code' => str_random(5),
        'city' => $faker->city,
        'airport_name' => $faker->firstName." Airport",
    ];
});
