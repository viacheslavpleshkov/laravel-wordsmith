<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogArticle;
use App\Models\Setting;

class BlogCategoryController extends Controller
{
	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$category = BlogCategory::findurl($url)->first();
		if (isset($category)) {
			$title = $category->name;
			$paginate = Setting::first()->paginate_site;
			$main = BlogArticle::status()->findcategory($category->id)->paginate($paginate);
			return view('site.categories.view', compact('main', 'title'));
		} else {
			abort(404);
		}
	}
}
