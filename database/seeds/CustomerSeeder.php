<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Customer::class, 5)->create();
        factory(App\Models\Customer::class, 20)->states('user')->create();
    }
}
