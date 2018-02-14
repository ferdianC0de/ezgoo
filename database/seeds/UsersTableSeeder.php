<?php

use Illuminate\Database\Seeder;
use App\Models\Entrust\Role as Role;
use App\Models\Entrust\Permission as Permission;
use App\User as User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat Role
        // $member = new Role();
        // $member->name         = 'member';
        // $member->display_name = 'Member EzGoo'; // optional
        // $member->description  = 'Pengguna menjadi member di EzGoo'; // optional
        // $member->save();

        //membuat Permission
        // $createPost = new Permission();
        // $createPost->name         = 'create-ticket';
        // $createPost->display_name = 'Create Ticket'; // optional
        // // Allow a user to...
        // $createPost->description  = 'Membuat ticket'; // optional
        // $createPost->save();
        //
        // $editUser = new Permission();
        // $editUser->name         = 'edit-user';
        // $editUser->display_name = 'Edit Users'; // optional
        // // Allow a user to...
        // $editUser->description  = 'Mengedit User'; // optional
        // $editUser->save();

        // $admin = App\Models\Entrust\Role::find(2);
        // $user = User::find(2);
        // $user->attachRole($admin);
        // factory(App\User::class, 5)->create()->attachRole($admin);
        //factory(App\User::class, 20)->create();
    }
}
