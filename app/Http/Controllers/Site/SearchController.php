<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class SearchController extends Controller
{
    public function views(Request $request)
    {
        $title = $request->get('search');
        $main = News::where('status', 1)->where('title', 'like', "%$title%")->orderBy('id', 'desc')->paginate(10);
        if (count($main)>0){
            return view('site.search.index', compact('title', 'main'));}
        else{
            return view('site.search.not-found');}
    }
}
