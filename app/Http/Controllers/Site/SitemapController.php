<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\ArticleRepository;
use App\Repositories\Site\CategoryRepository;
use App\Repositories\Site\PageRepository;

class SitemapController extends BaseController
{
	/**
	 * @var
	 */
	protected $blog_article;
	/**
	 * @var CategoryRepository
	 */
	protected $blog_category;
	/**
	 * @var PageRepository
	 */
	protected $page;

	/**
	 * SitemapController constructor.
	 */
	public function __construct()
	{
		$this->blog_article = new ArticleRepository();
		$this->blog_category = new CategoryRepository();
		$this->page = new PageRepository();
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$page = $this->page->getDesckAndFirst();
		$article = $this->blog_article->getStatusAndDesckAndFirst();
		$category = $this->blog_category->getStatusAndDesckAndFirst();
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
		$main = $this->blog_article->getStatusAndDesckAndLimit(250);
		return response()->view('site.sitemap.articles', compact('main'))
			->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function categories()
	{
		$main = $this->blog_category->getStatusAndDesckAndLimit(250);
		return response()->view('site.sitemap.categories', compact('main'))
			->header('Content-Type', 'text/xml');
	}
}
