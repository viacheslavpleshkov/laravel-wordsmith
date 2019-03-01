<?php

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lifestyle = new BlogCategory();
        $lifestyle->name = 'Lifestyle';
        $lifestyle->url = 'lifestyle';
        $lifestyle->seo_id = 6;
        $lifestyle->status = 1;
        $lifestyle->save();

        $travel = new BlogCategory();
        $travel->name = 'Travel';
        $travel->url = 'travel';
        $travel->seo_id = 6;
        $travel->status = 1;
        $travel->save();

        $recipes = new BlogCategory();
        $recipes->name = 'Recipes';
        $recipes->url = 'recipes';
        $recipes->seo_id = 6;
        $recipes->status = 1;
        $recipes->save();

        $management = new BlogCategory();
        $management->name = 'Management';
        $management->url = 'management';
        $management->seo_id = 6;
        $management->status = 1;
        $management->save();

        $health = new BlogCategory();
        $health->name = 'Health';
        $health->url = 'health';
        $health->seo_id = 6;
        $health->status = 1;
        $health->save();

        $creativity = new BlogCategory();
        $creativity->name = 'Creativity';
        $creativity->url = 'creativity';
        $creativity->seo_id = 6;
        $creativity->status = 1;
        $creativity->save();
    }
}
