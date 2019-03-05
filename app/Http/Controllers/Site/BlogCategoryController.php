<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\ArticleRepository;
use App\Repositories\Site\CategoryRepository;
use App\Repositories\Site\SettingRepository;

class BlogCategoryController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $blog_article;
	/**
	 * @var CategoryRepository
	 */
	protected $blog_category;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * BlogCategoryController constructor.\
	 */
	public function __construct()
	{
		$this->blog_article = new ArticleRepository();
		$this->blog_category = new CategoryRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$category = $this->blog_category->getCategoryUrl($url);
		if (isset($category)) {
			$title = $category->name;
			$paginate = $this->setting->getPaginateSite();
			$main = $this->blog_article->getCategoryId($category->id, $paginate);
			return view('site.categories.view', compact('main', 'title'));
		} else {
			abort(404);
		}
	}
}
