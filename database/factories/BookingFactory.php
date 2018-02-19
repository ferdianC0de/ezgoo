<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Booking::class, function (Faker $faker) {
  $cs = App\User::all();
  $csid = $cs->count();

  $type = ['App\Models\TrainSchedule' => 'Kereta','App\Models\PlaneSchedule' => 'Pesawat'];
  $cd = array_rand($type);
  $hehe = $type[$cd];

  $sch = $cd::all();
  $schid = $sch->count();
    return [
        //
        'user_id' => rand(1,$csid),
        'booking_date' => date('Y-m-d H:i:s'),
        'status' => rand(0,4),
        'vehicle' => $hehe,
        'schedule_id' => rand(1,$schid),
    ];
});
