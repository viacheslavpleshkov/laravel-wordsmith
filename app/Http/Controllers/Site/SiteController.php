<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\Setting;
use App\Article;
use App\Page;

class SiteController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $slider = Article::where('status', 1)->where('slide', 1)->get();
        $main = Page::find(1);
        $paginate = Setting::find(1)->paginate;
        $articles = Article::where('status', 1)->orderBy('id', 'desc')->paginate($paginate);
        return view('site.pages.index', compact('main', 'slider', 'articles'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function about()
    {
        $main = Page::find(3);
        return view('site.pages.about', compact('main'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function contact()
    {
        $main = Page::find(4);
        return view('site.pages.contact', compact('main'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function privacypolicy()
    {
        $main = Page::find(5);
        return view('site.pages.privacy-policy', compact('main'));
    }

}
