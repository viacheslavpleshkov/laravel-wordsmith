<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SociallinkRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
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
				'categories' => (new CategoryRepository())->getStatusAll(),
				'popularposts' => (new ArticleRepository())->getPopularArticles(),
				'settings' => (new SettingRepository())->getHome(),
				'sociallinks' => (new SociallinkRepository())->getStatusAll(),
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
