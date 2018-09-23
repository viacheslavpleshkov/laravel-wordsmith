<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting();
        $setting->paginate = 15;
        $setting->contactform = 1;
        $setting->seo_id = 1;
        $setting->save();
    }
}
