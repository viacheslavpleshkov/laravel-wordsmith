<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $main = News::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('news.index', compact('main'));
    }

    public function views($url)
    {
        $main = News::where('status', 1)->where('url', "$url")->first();
        return view('news.views', compact('main'));
    }
}
