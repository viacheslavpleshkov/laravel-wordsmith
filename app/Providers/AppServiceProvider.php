<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SociallinkRepository;
use Illuminate\Support\ServiceProvider;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Role;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Sociallink;
use App\Models\Subscribe;
use App\Models\User;
use App\Observers\ArticleObserver;
use App\Observers\CategoryObserver;
use App\Observers\CommentObserver;
use App\Observers\PageObserver;
use App\Observers\RoleObserver;
use App\Observers\SeoObserver;
use App\Observers\SettingObserver;
use App\Observers\SociallinkObserver;
use App\Observers\SubscribeObserver;
use App\Observers\UserObserver;

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
