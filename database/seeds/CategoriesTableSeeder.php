<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

/**
 * Class CategoriesTableSeeder
 */
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lifestyle = new Category();
        $lifestyle->name = 'Lifestyle';
        $lifestyle->url = 'lifestyle';
        $lifestyle->seo_id = 6;
        $lifestyle->status = 1;
        $lifestyle->save();

        $travel = new Category();
        $travel->name = 'Travel';
        $travel->url = 'travel';
        $travel->seo_id = 6;
        $travel->status = 1;
        $travel->save();

        $recipes = new Category();
        $recipes->name = 'Recipes';
        $recipes->url = 'recipes';
        $recipes->seo_id = 6;
        $recipes->status = 1;
        $recipes->save();

        $management = new Category();
        $management->name = 'Management';
        $management->url = 'management';
        $management->seo_id = 6;
        $management->status = 1;
        $management->save();

        $health = new Category();
        $health->name = 'Health';
        $health->url = 'health';
        $health->seo_id = 6;
        $health->status = 1;
        $health->save();

        $creativity = new Category();
        $creativity->name = 'Creativity';
        $creativity->url = 'creativity';
        $creativity->seo_id = 6;
        $creativity->status = 1;
        $creativity->save();
    }
}
