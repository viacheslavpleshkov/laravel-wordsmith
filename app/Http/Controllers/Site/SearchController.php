<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\SearchRequest;
use App\Repositories\SettingRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\PageRepository;

class SearchController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var PageRepository
	 */
	protected $page;

	/**
	 * SearchController constructor.
	 */
	public function __construct()
	{
		$this->setting = new SettingRepository();
		$this->article = new ArticleRepository();
		$this->page = new PageRepository();
	}

	/**
	 * @param SearchRequest $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function search(SearchRequest $request)
	{
		if (isset($request->search)) {
			$title = $request->search;
			$paginate = $this->setting->getPaginateSite();
			$articles = $this->article->getSearch($title, $paginate);
			$main = $this->page->getPageSearch();
			if (count($articles) > 0) {
				return view('site.search.index', compact('title', 'main', 'articles'));
			} else {
				return view('site.search.sorry', compact('title', 'main'));
			}
		} else {
			abort(404);
		};
	}
}