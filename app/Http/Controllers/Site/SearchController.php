<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use App\Setting;
use App\Article;

class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        if (isset($request->search)) {
            $title = $request->search;
            $paginate = Setting::find(1)->paginate;
            $articles = Article::where('status', 1)->where('title', 'like', "%$request->search%")->orderBy('id', 'desc')->paginate($paginate);
            $main = Page::find(6);
            if (count($articles) > 0) {
                return view('site.search.index', compact('title', 'main', 'articles'));
            } else {
                return view('site.search.sorry', compact('title', 'main'));
            }
        } else {
            abort(404);
        };
    }
}