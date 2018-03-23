<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role;
        $admin->name = 'admin';
        $admin->description = 'admin';
        $admin->save();

        $user = new Role;
        $user->name = 'user';
        $user->description = 'user';
        $user->save();
    }
}
