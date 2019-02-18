<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\Setting;
use App\Article;
use App\Page;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function index()
	{
		$slider = Article::status()->slide()->get();
		$main = Page::pagehome();
		$paginate = Setting::first()->paginate_site;
		$articles = Article::status()->desc()->paginate($paginate);
		return view('site.pages.index', compact('main', 'slider', 'articles'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function about()
	{
		$main = Page::pageabout();
		return view('site.pages.about', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function privacypolicy()
	{
		$main = Page::pageprivacypolicy();
		return view('site.pages.privacy-policy', compact('main'));
	}
}
