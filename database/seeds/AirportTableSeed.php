<?php

use Illuminate\Database\Seeder;

class AirportTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Airport::class, 5)->create();
    }
}
