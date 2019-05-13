<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PageRepository;

/**
 * Class SitemapController
 * @package App\Http\Controllers\Site
 */
class SitemapController extends BaseController
{
	/**
	 * @var
	 */
	protected $articleRepository;
	/**
	 * @var CategoryRepository
	 */
	protected $categoryRepository;
	/**
	 * @var PageRepository
	 */
	protected $pageRepository;

	/**
	 * SitemapController constructor.
	 * @param ArticleRepository $articleRepository
	 * @param CategoryRepository $categoryRepository
	 * @param PageRepository $pageRepository
	 */
	public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository, PageRepository $pageRepository)
	{
		$this->articleRepository = $articleRepository;
		$this->categoryRepository = $categoryRepository;
		$this->pageRepository = $pageRepository;
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$page = $this->pageRepository->getDesckAndFirst();
		$article = $this->articleRepository->getStatusAndDesckAndFirst();
		$category = $this->categoryRepository->getStatusAndDesckAndFirst();

		return response()->view('site.sitemap.index', compact('page', 'article', 'category'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function pages()
	{
		$main = $this->pageRepository->getStatusAndDesckAndLimit(250);

		return response()->view('site.sitemap.pages', compact('main'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function articles()
	{
		$main = $this->articleRepository->getStatusAndDesckAndLimit(250);

		return response()->view('site.sitemap.articles', compact('main'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function categories()
	{
		$main = $this->categoryRepository->getStatusAndDesckAndLimit(250);

		return response()->view('site.sitemap.categories', compact('main'))
			->header('Content-Type', 'text/xml');
	}
}
