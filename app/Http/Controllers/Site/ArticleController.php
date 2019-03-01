<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BlogArticle;
use App\Models\BlogComment;
use App\Models\Page;
use App\Models\Setting;

class ArticleController extends Controller
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = Page::pageblog();
		$paginate = Setting::first()->paginate_site;
		$articles = BlogArticle::status()->orderBy('id', 'desc')->paginate($paginate);
		return view('site.articles.index', compact('main', 'articles'));
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$main = BlogArticle::findurl($url)->first();
		if (isset($main)) {
			$main->increment('views');
			$previous = BlogArticle::previouspost($main->id)->first();
			$next = BlogArticle::nextpost($main->id)->first();
			$comments = BlogComment::status()->getcomments($main->id)->desc()->get();
			$count = $comments->count();
			return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
		} else {
			abort(404);
		}
	}
}
