<?php

namespace App\Http\Controllers\Site;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $main = News::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('site.news.index', compact('main'));
    }

    public function views($url)
    {
        $main = News::where('status', 1)->where('url', "$url")->first();
        if (isset($main)) {
            News::where('status', 1)->where('url', "$url")->increment('views');
            return view('site.news.views', compact('main'));
        } else {
            return abort(404);
        }
    }
}
