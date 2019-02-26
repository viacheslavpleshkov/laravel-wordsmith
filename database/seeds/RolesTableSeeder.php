<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'User';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'User Author';
        $role_author->save();

        $role_moderator = new Role();
        $role_moderator->name = 'Moderator';
        $role_moderator->description = 'User Moderator';
        $role_moderator->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'User Admin';
        $role_admin->save();
    }
}
