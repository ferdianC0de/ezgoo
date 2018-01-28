<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Customer::class, function (Faker $faker) {
  $array = ['A'=> "Tuan",'B'=>"Nyonya",'C'=>"Nona"];
  $rnd = array_rand($array);
    return [
        'title' => $array[$rnd],
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
    ];
});

$factory->state(App\Models\Customer::class, 'user' ,function (Faker $faker) {
    return [
      'user_id' => function () {
          return factory(App\User::class)->create()->id;
        },
    ];
});
