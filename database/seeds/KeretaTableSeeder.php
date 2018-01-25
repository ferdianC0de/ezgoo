<?php

use Illuminate\Database\Seeder;

class KeretaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Kereta::class, 10)->create();
    }
}
