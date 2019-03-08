<?php

namespace App\Http\Controllers\Site;

use App;
use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;
use App\Repositories\PageRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailShipped;
use App\Http\Requests\Site\ContactRequest;

class SiteController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var PageRepository
	 */
	protected $page;

	/**
	 * SiteController constructor.
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository;
		$this->setting = new SettingRepository();
		$this->page = new PageRepository();

	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$slider = $this->article->getSlideAll();
		$main = $this->page->getPageHome();
		$paginate = $this->setting->getPaginateSite();
		$articles = $this->article->getArticlesAll($paginate);
		return view('site.pages.index', compact('main', 'slider', 'articles'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function about()
	{
		$main = $this->page->getPageAbout();
		return view('site.pages.about', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function privacypolicy()
	{
		$main = $this->page->getPagePrivacyPolicy();
		return view('site.pages.privacy-policy', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function contact()
	{
		$main = $this->page->getPageContact();
		$setting = $this->setting->getById(1);
		return view('site.pages.contact', compact('main', 'setting'));
	}

	/**
	 * @param ContactRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function submit(ContactRequest $request)
	{
		Mail::send(new MailShipped($request));
		return redirect()->route('site.contact')->with('success', __('site.contact-success'));
	}
}
