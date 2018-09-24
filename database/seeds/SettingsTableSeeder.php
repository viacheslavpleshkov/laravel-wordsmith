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
        $setting->footer_about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $setting->save();
    }
}
