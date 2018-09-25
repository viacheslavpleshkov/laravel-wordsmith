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
        $page = Page::orderBy('id', 'desc')->first();
        $article = Article::where('status', 1)->orderBy('id', 'desc')->first();
        $category = Category::where('status', 1)->orderBy('id', 'desc')->first();
        return response()->view('site.sitemap.index', compact('page', 'article', 'category'))->header('Content-Type', 'text/xml');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function pages()
    {
        $main = Page::where('status', 1)->orderBy('id', 'desc')->get();
        return response()->view('site.sitemap.pages', compact('main'))->header('Content-Type', 'text/xml');
    }
    /**
     * @return \Illuminate\Http\Response
     */
    public function articles()
    {
        $main = Article::where('status', 1)->orderBy('id', 'desc')->get();
        return response()->view('site.sitemap.articles', compact('main'))->header('Content-Type', 'text/xml');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $main = Category::where('status', 1)->orderBy('id', 'desc')->get();
        return response()->view('site.sitemap.categories', compact('main'))->header('Content-Type', 'text/xml');
    }
}
