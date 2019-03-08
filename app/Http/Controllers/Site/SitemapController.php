<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PageRepository;

class SitemapController extends BaseController
{
	/**
	 * @var
	 */
	protected $article;
	/**
	 * @var CategoryRepository
	 */
	protected $category;
	/**
	 * @var PageRepository
	 */
	protected $page;

	/**
	 * SitemapController constructor.
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository();
		$this->category = new CategoryRepository();
		$this->page = new PageRepository();
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$page = $this->page->getDesckAndFirst();
		$article = $this->article->getStatusAndDesckAndFirst();
		$category = $this->category->getStatusAndDesckAndFirst();
		return response()->view('site.sitemap.index', compact('page', 'article', 'category'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function pages()
	{
		$main = $this->page->getStatusAndDesckAndLimit(250);
		return response()->view('site.sitemap.pages', compact('main'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function articles()
	{
		$main = $this->article->getStatusAndDesckAndLimit(250);
		return response()->view('site.sitemap.articles', compact('main'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function categories()
	{
		$main = $this->category->getStatusAndDesckAndLimit(250);
		return response()->view('site.sitemap.categories', compact('main'))
			->header('Content-Type', 'text/xml');
	}
}
