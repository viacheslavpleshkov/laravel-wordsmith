<?php

use Illuminate\Database\Seeder;
use App\Sociallink;

class SociallinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Sociallink();
        $role_user->icon = 'User';
        $role_user->url = 'User';
        $role_user->status = 1;
        $role_user->save();
    }
}
