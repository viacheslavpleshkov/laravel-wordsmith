<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Article;
use App\Comment;
use App\Page;
use App\Setting;

class ArticleController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $main = Page::find(2);
        $paginate = Setting::find(1)->paginate;
        $articles = Article::where('status', 1)->orderBy('id', 'desc')->paginate($paginate);
        return view('site.articles.index', compact('main', 'articles'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($url)
    {
        $main = Article::where('url', $url)->first();
        if (isset($main)) {
            $main->increment('views');
            $previous = Article::where('id', '<', $main->id)->orderBy('id', 'desc')->first();
            $next = Article::where('id', '>', $main->id)->orderBy('id')->first();
            $comments = Comment::where('status', 1)->where('article_id', $main->id)->get();
            $count = $comments->count();
            return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
        } else
        {
            abort(404);
        }
    }
}
