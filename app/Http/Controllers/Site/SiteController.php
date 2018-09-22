<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\About;
use App\Contact;
use App\Blog;
use App\Article;
use App\Privacypolicy;

class SiteController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $slider = Article::where('status', 1)->where('slide', 1)->get();
        $paginate = Blog::find(1)->paginate;
        $articles = Article::where('status', 1)->orderBy('id', 'desc')->paginate($paginate);
        return view('site.pages.index', compact('slider', 'articles'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function about()
    {
        $main = About::find(1);
        return view('site.pages.about', compact('main'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function contact()
    {
        $main = Contact::find(1);
        return view('site.pages.contact', compact('main'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function privacypolicy()
    {
        $main = Privacypolicy::find(1);
        return view('site.pages.privacy-policy', compact('main'));
    }

}
