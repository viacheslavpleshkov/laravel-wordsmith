<?php

namespace App\Providers;

use App\Repositories\RepositoryInterface;
use App\Repositories\Site\BlogArticleRepository;
use App\Repositories\Site\BlogCategoryRepository;
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
				'categories' => (new BlogCategoryRepository())->getStatusAll(),
				'popularposts' => (new BlogArticleRepository())->getPopularArticles(),
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
		$this->app->singleton(RepositoryInterface::class, BlogArticleRepository::class);

	}
}
