<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Category;
use App\News;


class CategoryController extends Controller
{
    public function views($url)
    {
        $category = Category::where('status', 1)->where('url', "$url")->first();
        $title = $category->title;
        $main = News::where('status', 1)->where('category_id', "$category->id")->orderBy('id', 'desc')->paginate(10);
        return view('site.categories.views', compact('main', 'title'));
    }
}
