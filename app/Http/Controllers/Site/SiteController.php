<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App;
use App\Models\Setting;
use App\Models\BlogArticle;
use App\Models\Page;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailShipped;
use App\Http\Requests\SIte\Contact as ContactRequest;

class SiteController extends Controller
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function index()
	{
		$slider = BlogArticle::status()->slide()->get();
		$main = Page::pagehome();
		$paginate = Setting::first()->paginate_site;
		$articles = BlogArticle::status()->desc()->paginate($paginate);
		return view('site.pages.index', compact('main', 'slider', 'articles'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function about()
	{
		$main = Page::pageabout();
		return view('site.pages.about', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function privacypolicy()
	{
		$main = Page::pageprivacypolicy();
		return view('site.pages.privacy-policy', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function contact()
	{
		$main = Page::pagecontact();
		$setting = Setting::first();
		return view('site.pages.contact', compact('main', 'setting'));
	}

	/**
	 * @param Contact $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function submit(ContactRequest $request)
	{
		Mail::send(new MailShipped($request));
		return redirect()->route('site.contact')->with('success', __('site.contact-success'));
	}
}
