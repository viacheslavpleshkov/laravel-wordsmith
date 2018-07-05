<?php

namespace App\Http\Controllers;

use App;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index');
    }

    public function aboutus()
    {
        return view('site.aboutus');
    }

    public function rules()
    {
        return view('site.rules');
    }

    public function athletes()
    {
        return view('site.athletes');
    }

    public function photogallery()
    {
        return view('site.photogallery');
    }

    public function writetous()
    {
        return view('site.writetous');
    }
}