<?php

namespace App\Providers;

use App\Repositories\RepositoryInterface;
use App\Repositories\Site\ArticleRepository;
use App\Repositories\Site\CategoryRepository;
use App\Repositories\Site\SettingRepository;
use App\Repositories\Site\SociallinkRepository;
use Illuminate\Support\ServiceProvider;

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
		$this->app->singleton(RepositoryInterface::class, ArticleRepository::class);

	}
}
