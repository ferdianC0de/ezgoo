<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Kereta;
use App\Models\Stasiun;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nama_depan' => $faker->firstName,
        'nama_belakang' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'verified' => 0,
        'remember_token' => str_random(10),
        'verification_token' => hash_hmac('sha256', Str::random(40), config('app.key')),
    ];
});

$factory->define(App\Models\Kereta::class, function (Faker $faker) {
    return [
        'nama_kereta' => "Agro ".$faker->firstName,
        'kursi_eko' => rand(1,20),
        'kursi_bisnis' => rand(1,20),
        'kursi_eksekutif' => rand(1,20),
    ];
});

$factory->define(App\Models\Stasiun::class, function (Faker $faker) {
    return [
        'kode' => str_random(5),
        'kota' => $faker->city,
        'nama_stasiun' => $faker->city." Station",
    ];
});

$factory->define(App\Models\Jadwal_kereta::class, function (Faker $faker) {
  $kereta = Kereta::first();
  $stasiunAwal = Stasiun::first();
  $stasiunAkhir = Stasiun::find(2);
    return [
        'stasiun_id' => $stasiunAwal->id,
        'kereta_id' => $kereta->id,
        'dari' => $stasiunAwal->nama_stasiun,
        'tujuan' => $stasiunAkhir->nama_stasiun,
        'datang' => Date('H:i:s'),
        'pergi' => Date('H:i:s'),
        'tanggal' => Date('Y-m-d'),
    ];
});
