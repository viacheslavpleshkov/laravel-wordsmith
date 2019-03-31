<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SociallinkRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function boot()
	{
		if (config('app.env') === 'production') {
			\URL::forceScheme('https');
		}
		\View::composer('site.layouts.main', function ($view, CategoryRepository $categoryRepository, ArticleRepository $articleRepository, SettingRepository $settingRepository, SociallinkRepository $sociallinkRepository) {
			$view->with([
				'categories' => $categoryRepository->getStatusAll(),
				'popularposts' => $articleRepository->getPopularArticles(),
				'settings' => $settingRepository->getHome(),
				'sociallinks' => $sociallinkRepository->getStatusAll(),
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
