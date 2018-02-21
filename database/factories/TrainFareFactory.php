<?php

use Faker\Generator as Faker;
use App\Models\Train;

$factory->define(App\Models\TrainFare::class, function (Faker $faker) {
    DB::table('train_fares')->delete();
    static $num = 1;
    $unique = mt_rand(1,999);
    $train = Train::find($num);
    $num++;
    $array = ['A'=> 5000,'B'=>10000,'C'=>15000];
    $abc = array_rand($array);
    $price = $array[$abc];

      return [
          //
          'train_id' => $train->id,
          'eco_seat' => $priceEco,
          'bus_seat' => $priceEco,
          'exec_seat' => $priceEco,
          'unique_code' => $unique
      ];
});
