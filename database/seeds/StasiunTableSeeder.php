<?php

use Illuminate\Database\Seeder;

class StasiunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Stasiun::class, 10)->create();
    }
}
