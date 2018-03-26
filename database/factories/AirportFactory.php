<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Airport::class, function (Faker $faker) {
    return [
        'airport_name' => $faker->city. ' airport',
        'city' => $faker->city,
        'code' => str_random(5)
    ];
});
