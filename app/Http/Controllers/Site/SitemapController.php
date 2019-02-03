<?php

namespace App\Http\Controllers\Site;

use App\Article;
use App\Category;
use App\Page;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
	/**
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$page = Page::desc()->first();
		$article = Article::status()->desc()->first();
		$category = Category::status()->desc()->first();
		return response()->view('site.sitemap.index', compact('page', 'article', 'category'))->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function pages()
	{
		$main = Page::status()->desc()->get();
		return response()->view('site.sitemap.pages', compact('main'))->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function articles()
	{
		$main = Article::status()->desc()->get();
		return response()->view('site.sitemap.articles', compact('main'))->header('Content-Type', 'text/xml');
	}

	/**
	 * @return \Illuminate\Http\Response
	 */
	public function categories()
	{
		$main = Category::status()->desc()->get();
		return response()->view('site.sitemap.categories', compact('main'))->header('Content-Type', 'text/xml');
	}
}
