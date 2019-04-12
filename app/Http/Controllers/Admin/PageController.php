<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\PageRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SeoRepository;
use App\Http\Requests\Admin\PageUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PageController extends BaseController
{
	protected $pageRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;
	/**
	 * @var SeoRepository
	 */
	protected $seoRepository;

	/**
	 * PageController constructor.
	 * @param PageRepository $pageRepository
	 * @param SettingRepository $settingRepository
	 * @param SeoRepository $seoRepository
	 */
	public function __construct(PageRepository $pageRepository, SettingRepository $settingRepository, SeoRepository $seoRepository)
	{
		$this->pageRepository = $pageRepository;
		$this->settingRepository = $settingRepository;
		$this->seoRepository = $seoRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->pageRepository->getPageAdminAll($paginate);

		return view('admin.pages.index', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->pageRepository->getById($id);
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') show page id= '. $id);

		return view('admin.pages.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->pageRepository->getById($id);
		$seo = $this->seoRepository->getAll();

		return view('admin.pages.edit', compact('main', 'seo'));
	}

	/**
	 * @param PageUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(PageUpdateRequest $request, $id)
	{
		$this->pageRepository->update($id, $request->all());
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') edit page id= '. $id . ' with params ', $request->all());

		return redirect()->route('pages.index')->with('success', __('admin.updated-success'));
	}
}
