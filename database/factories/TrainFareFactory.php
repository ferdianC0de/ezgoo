<?php

use Faker\Generator as Faker;
use App\Models\Train;

$factory->define(App\Models\TrainFare::class, function (Faker $faker) {
    DB::table('train_fares')->delete();
    $rnd = rand(1,99);
    $train = Train::find($rnd);

      $array = ['A'=> 5000,'B'=>10000,'C'=>15000];
      $abc = array_rand($array);
      $priceEco = $array[$abc];
      // $priceBus = $array[$abc];
      // $priceExec = $array[$abc];

      return [
          //
          'train_id' => $train->id,
          'eco_seat' => $priceEco,
          'bus_seat' => $priceEco,
          'exec_seat' => $priceEco,
      ];
});
