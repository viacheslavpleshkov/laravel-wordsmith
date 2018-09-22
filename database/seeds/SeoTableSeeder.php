<?php

use Illuminate\Database\Seeder;
use App\Seo;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Seo();
        $home->title = 'Home';
        $home->description = 'Description wordsmith';
        $home->keyword = 'Keyword wordsmith';
        $home->save();

        $blog = new Seo();
        $blog->title = 'Blog';
        $blog->description = 'Description blog';
        $blog->keyword = 'Keyword blog';
        $blog->save();

        $about = new Seo();
        $about->title = 'About';
        $about->description = 'Description about';
        $about->keyword = 'Keyword about';
        $about->save();

        $contact = new Seo();
        $contact->title = 'Contact';
        $contact->description = 'Description contact';
        $contact->keyword = 'Keyword contact';
        $contact->save();

        $contact = new Seo();
        $contact->title = 'Privacy policy';
        $contact->description = 'Description privacy policy';
        $contact->keyword = 'Keyword privacy policy';
        $contact->save();
    }
}
