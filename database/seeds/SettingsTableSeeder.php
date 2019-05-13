<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
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
		$setting->paginate_site = 28;
		$setting->paginate_admin = 50;
		$setting->contactform = 1;
		$setting->footer_about = $faker->text(150);
		$setting->save();
	}
}
