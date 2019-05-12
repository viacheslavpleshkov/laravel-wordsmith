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
	protected $articleRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;
	/**
	 * @var PageRepository
	 */
	protected $pageRepository;

	/**
	 * SiteController constructor.
	 * @param ArticleRepository $articleRepository
	 * @param SettingRepository $settingRepository
	 * @param PageRepository $pageRepository
	 */
	public function __construct(ArticleRepository $articleRepository, SettingRepository $settingRepository, PageRepository $pageRepository)
	{
		$this->articleRepository = $articleRepository;
		$this->settingRepository = $settingRepository;
		$this->pageRepository = $pageRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$slider = $this->articleRepository->getSlideAll();
		$main = $this->pageRepository->getPageHome();
		return view('site.pages.index', compact('main', 'slider'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function about()
	{
		$main = $this->pageRepository->getPageAbout();

		return view('site.pages.about', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function privacypolicy()
	{
		$main = $this->pageRepository->getPagePrivacyPolicy();

		return view('site.pages.privacy-policy', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function contact()
	{
		$main = $this->pageRepository->getPageContact();
		$setting = $this->settingRepository->getById(1);

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

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function search()
	{
		return view('site.pages.algolia');
	}
}
