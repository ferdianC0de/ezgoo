<?php

use Illuminate\Database\Seeder;

class Jadwal_keretaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Jadwal_kereta::class, 10)->create();
    }
}
