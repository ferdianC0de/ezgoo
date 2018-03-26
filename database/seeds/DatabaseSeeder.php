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
        $this->call(UserTableSeed::class);
        $this->call(RoleTableSeed::class);

        $this->call(AirportTableSeed::class);
        $this->call(PlaneTableSeed::class);
        $this->call(PlaneFareTableSeed::class);
        $this->call(PlaneScheduleTableSeed::class);
    }
}
