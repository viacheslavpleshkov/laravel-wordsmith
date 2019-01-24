<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Sociallink;
use App\Setting;
use App\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		\View::composer('site.layouts.main', function ($view) {
			$view->with([
				'categories' => Category::where('status', 1)->get(),
				'popularposts' =>  Article::where('status', 1)->orderBy('views', 'desc')->limit(6)->get(),
				'settings' => Setting::find(1),
				'sociallinks' => Sociallink::where('status', 1)->get(),
			]);
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
