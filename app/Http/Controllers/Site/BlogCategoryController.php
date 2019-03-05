<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\BlogArticleRepository;
use App\Repositories\Site\BlogCategoryRepository;
use App\Repositories\Site\SettingRepository;

class BlogCategoryController extends BaseController
{
	/**
	 * @var BlogArticleRepository
	 */
	protected $blog_article;
	/**
	 * @var BlogCategoryRepository
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
		$this->blog_article = new BlogArticleRepository();
		$this->blog_category = new BlogCategoryRepository();
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
