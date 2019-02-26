<?php

use Illuminate\Database\Seeder;
use App\Models\Seo;

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
        $home->status = 1;
        $home->save();

        $blog = new Seo();
        $blog->title = 'Blog';
        $blog->description = 'Description blog';
        $blog->keyword = 'Keyword blog';
        $blog->status = 1;
        $blog->save();

        $about = new Seo();
        $about->title = 'About';
        $about->description = 'Description about';
        $about->keyword = 'Keyword about';
        $about->status = 1;
        $about->save();

        $contact = new Seo();
        $contact->title = 'Contact';
        $contact->description = 'Description contact';
        $contact->keyword = 'Keyword contact';
        $contact->status = 1;
        $contact->save();

        $privacypolicy = new Seo();
        $privacypolicy->title = 'Privacy policy';
        $privacypolicy->description = 'Description privacy policy';
        $privacypolicy->keyword = 'Keyword privacy policy';
        $privacypolicy->status = 1;
        $privacypolicy->save();

        $categories = new Seo();
        $categories->title = 'Categories';
        $categories->description = 'Description categories';
        $categories->keyword = 'Keyword categories';
        $categories->status = 1;
        $categories->save();

        $article = new Seo();
        $article->title = 'Article';
        $article->description = 'Description article';
        $article->keyword = 'Keyword article';
        $article->status = 1;
        $article->save();

        $search = new Seo();
        $search->title = 'Search';
        $search->description = 'Description search';
        $search->keyword = 'Keyword search';
        $search->status = 1;
        $search->save();
    }
}
