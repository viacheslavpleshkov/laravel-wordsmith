<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		$user = new User();
		$user->name = $faker->name();
		$user->email = 'mail@slavapleshkov.com';
		$user->about = $faker->text(150);
		$user->password = Hash::make(str_random(100));
		$user->role_id = 4;
		$user->save();
	}
}
