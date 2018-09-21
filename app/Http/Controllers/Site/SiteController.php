<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\About;
use App\Contact;
use App\Seo;
use App\Privacypolicy;
use Illuminate\Support\Facades\URL;

class SiteController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $seo = Seo::where('url', URL::current())->first();
        return view('site.pages.index', compact('seo'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function about()
    {
        $main = About::find(1);
        $seo = Seo::where('url', URL::current())->first();
        return view('site.pages.about', compact('main', 'seo'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function contact()
    {
        $main = Contact::find(1);
        $seo = Seo::where('url', URL::current())->first();
        return view('site.pages.contact', compact('main', 'seo'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function privacypolicy()
    {
        $main = Privacypolicy::find(1);
        $seo = Seo::where('url', URL::current())->first();
        return view('site.pages.privacy-policy', compact('main', 'seo'));
    }

}
