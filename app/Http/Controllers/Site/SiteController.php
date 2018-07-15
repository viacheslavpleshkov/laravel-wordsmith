<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;

class SiteController extends Controller
{
    public function aboutus()
    {
        return view('site.pages.aboutus');
    }

    public function rules()
    {
        return view('site.pages.rules');
    }

    public function athletes()
    {
        return view('site.pages.athletes');
    }

    public function photogallery()
    {
        return view('site.pages.photogallery');
    }

    public function writetous()
    {
        return view('site.pages.writetous');
    }
}