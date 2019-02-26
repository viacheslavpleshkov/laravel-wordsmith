<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Search as SearchRequest;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Article;

class SearchController extends Controller
{
	/**
	 * @param SearchRequest $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function search(SearchRequest $request)
    {
        if (isset($request->search)) {
            $title = $request->search;
            $paginate = Setting::find(1)->paginate_site;
            $articles = Article::status()->search($request->search)->desc()->paginate($paginate);
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