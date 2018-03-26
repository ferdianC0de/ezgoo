<?php

use Illuminate\Database\Seeder;

class PlaneScheduleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PlaneSchedule::class, 10)->create();
    }
}
