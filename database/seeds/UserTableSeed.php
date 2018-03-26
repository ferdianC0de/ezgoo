<?php

use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'name' => 'Muhammad rafi',
          'email'=> 'rafi160500@gmail.com',
          'password'=> bcrypt('password'),
          'verified'=> 1
        ]);
        factory(App\User::class,20)->create();
    }
}
