<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;

class CategoryController extends Controller
{
    public function views($url)
    {
        $category = Category::where('status', 1)->where('url', "$url")->first();
        $title = $category->title;
        $main = News::where('status', 1)->where('category_id', "$category->id")->orderBy('id', 'desc')->paginate(10);
        return view('categories.views', compact('main', 'title'));
    }
}
