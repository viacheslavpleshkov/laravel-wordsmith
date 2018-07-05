<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
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
        return view('site.news');
    }
    public function aboutus()
    {
        return view('site.news');
    }
}