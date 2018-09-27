<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Category;
use App\Article;
use App\Setting;

class CategoryController extends Controller
{
    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($url)
    {
        $category = Category::where('url', $url)->first();
        if (isset($category)) {
            $title = $category->name;
            $paginate = Setting::find(1)->paginate;
            $main = Article::where('status', 1)->where('category_id', $category->id)->paginate($paginate);
            return view('site.categories.view', compact('main', 'title'));
        } else {
            abort(404);
        }
    }
}
