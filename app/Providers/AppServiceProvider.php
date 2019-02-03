<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Sociallink;
use App\Setting;
use App\Article;
use App\Providers\TelescopeServiceProvider;

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
				'categories' => Category::status()->get(),
				'popularposts' => Article::status()->views()->limit(6)->get(),
				'settings' => Setting::find(1),
				'sociallinks' => Sociallink::status()->get(),
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
		if ($this->app->isLocal()) {
			$this->app->register(TelescopeServiceProvider::class);
		}
	}
}
