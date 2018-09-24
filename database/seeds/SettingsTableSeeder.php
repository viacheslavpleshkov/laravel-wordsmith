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
        $setting->footer_about = 'Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at. Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur. Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error temporibus magnam est voluptatem.';
        $setting->save();
    }
}
