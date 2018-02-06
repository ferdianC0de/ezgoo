<?php

use Illuminate\Database\Seeder;

class PlaneFareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\PlaneFare::class, 10)->create();
    }
}
