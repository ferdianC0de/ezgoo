<?php

use Illuminate\Database\Seeder;

class PlaneFareTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PlaneFare::class, 5)->create();
    }
}
