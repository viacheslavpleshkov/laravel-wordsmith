<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Blog;
use App\Article;

class ArticleController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = Blog::find(1);
        $articles = Article::where('status', 1)->get();
        return view('site.articles.index', compact('main', 'articles'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($url)
    {
        $main = Article::where('url', $url)->first();
        return view('site.articles.view', compact('main'));
    }
}
