<?php

use Illuminate\Database\Seeder;
use App\Models\Sociallink;

class SociallinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sociallink_facesbook = new Sociallink();
        $sociallink_facesbook->icon = 'fab fa-facebook';
        $sociallink_facesbook->url = '#';
        $sociallink_facesbook->status = 1;
        $sociallink_facesbook->save();

        $sociallink_twitter = new Sociallink();
        $sociallink_twitter->icon = 'fab fa-twitter';
        $sociallink_twitter->url = '#';
        $sociallink_twitter->status = 1;
        $sociallink_twitter->save();

        $sociallink_instagram = new Sociallink();
        $sociallink_instagram->icon = 'fab fa-instagram';
        $sociallink_instagram->url = '#';
        $sociallink_instagram->status = 1;
        $sociallink_instagram->save();

        $sociallink_youtube = new Sociallink();
        $sociallink_youtube->icon = 'fab fa-youtube';
        $sociallink_youtube->url = '#';
        $sociallink_youtube->status = 1;
        $sociallink_youtube->save();

        $sociallink_pinterest = new Sociallink();
        $sociallink_pinterest->icon = 'fab fa-pinterest';
        $sociallink_pinterest->url = '#';
        $sociallink_pinterest->status = 1;
        $sociallink_pinterest->save();

    }
}
