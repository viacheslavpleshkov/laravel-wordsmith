<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\About;
use App\Contact;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.index');
    }

    public function about()
    {
        $main = About::find(1);
        return view('site.pages.about', compact('main'));
    }

    public function contact()
    {
        $main = Contact::find(1);
        return view('site.pages.contact',compact('main'));
    }
}
