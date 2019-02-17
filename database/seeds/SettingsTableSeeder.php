<?php

use Illuminate\Database\Seeder;
use App\Setting;
use Faker\Factory;

class SettingsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		$setting = new Setting();
		$setting->paginate = 15;
		$setting->contactform = 1;
		$setting->footer_about = $faker->text(150);
		$setting->save();
	}
}
