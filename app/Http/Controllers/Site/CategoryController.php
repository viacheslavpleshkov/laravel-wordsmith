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
		$category = Category::findurl($url)->first();
		if (isset($category)) {
			$title = $category->name;
			$paginate = Setting::first()->paginate;
			$main = Article::status()->findcategory($category->id)->paginate($paginate);
			return view('site.categories.view', compact('main', 'title'));
		} else {
			abort(404);
		}
	}
}
