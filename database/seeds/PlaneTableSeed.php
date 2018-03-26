<?php

use Illuminate\Database\Seeder;

class PlaneTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Plane::class, 5)->create();
    }
}
