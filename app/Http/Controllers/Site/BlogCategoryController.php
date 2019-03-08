<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;

class BlogCategoryController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var CategoryRepository
	 */
	protected $category;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * BlogCategoryController constructor.\
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository();
		$this->category = new CategoryRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$category = $this->category->getCategoryUrl($url);
		if (isset($category)) {
			$title = $category->name;
			$paginate = $this->setting->getPaginateSite();
			$main = $this->article->getCategoryId($category->id, $paginate);
			return view('site.categories.view', compact('main', 'title'));
		} else {
			abort(404);
		}
	}
}
