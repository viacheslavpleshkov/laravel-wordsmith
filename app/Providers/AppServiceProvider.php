<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Sociallink;
use App\Models\Setting;
use App\Models\Article;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if (config('app.env') === 'production') {
			\URL::forceScheme('https');
		}
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
