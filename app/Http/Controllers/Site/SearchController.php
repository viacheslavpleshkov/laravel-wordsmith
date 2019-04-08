<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\SearchRequest;
use App\Repositories\SettingRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\PageRepository;
use App\Repositories\CacheRepository;

class SearchController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;
	/**
	 * @var ArticleRepository
	 */
	protected $articleRepository;
	/**
	 * @var PageRepository
	 */
	protected $pageRepository;
	/**
	 * @var
	 */
	protected $cacheRepository;

	/**
	 * SearchController constructor.
	 * @param SettingRepository $settingRepository
	 * @param ArticleRepository $articleRepository
	 * @param PageRepository $pageRepository
	 * @param CacheRepository $cacheRepository
	 */
	public function __construct(SettingRepository $settingRepository, ArticleRepository $articleRepository, PageRepository $pageRepository, CacheRepository $cacheRepository)
	{
		$this->settingRepository = $settingRepository;
		$this->articleRepository = $articleRepository;
		$this->pageRepository = $pageRepository;
		$this->cacheRepository = $cacheRepository;
	}

	/**
	 * @param SearchRequest $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function search(SearchRequest $request)
	{
		$paginate = $this->settingRepository->getPaginateSite();
		$main = $this->pageRepository->getPageSearch();
		if (isset($request->search)) {
			$title = $request->search;
			$paginate = $this->settingRepository->getPaginateSite();
			$articles = $this->articleRepository->getSearch($title, $paginate);
			$main = $this->pageRepository->getPageSearch();

			if (count($articles) > 0) {
				return view('site.search.index', compact('title', 'main', 'articles'));
			} else {
				return view('site.search.sorry', compact('title', 'main'));
			}

		} else {
			$articles = $this->articleRepository->getArticlesAll($paginate);
			$title = 'Hello';
			return view('site.search.index', compact('title', 'main', 'articles'));
		};
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function algolia()
	{
		return view('site.search.algolia');
	}
}