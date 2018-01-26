<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TrainTableSeeder::class);
        $this->call(TrainStationTableSeeder::class);
        $this->call(TrainScheduleSeeder::class);

        $this->call(PlaneSeeder::class);
        $this->call(AirportSeeder::class);
        $this->call(PlaneScheduleSeeder::class);
        $this->call(PlaneFareSeeder::class);

    }
}
