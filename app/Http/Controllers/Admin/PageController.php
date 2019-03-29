<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\PageRepository;
use App\Repositories\SettingRepository;
use App\Repositories\SeoRepository;
use App\Http\Requests\Admin\PageEditRequest;

class PageController extends BaseController
{
	protected $page;
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var SeoRepository
	 */
	protected $seo;

	/**
	 * PageController constructor.
	 */
	public function __construct()
	{
		$this->page = new PageRepository();
		$this->setting = new SettingRepository();
		$this->seo = new SeoRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->page->getPageAdminAll($paginate);

		return view('admin.pages.index', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->page->getById($id);

		return view('admin.pages.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->page->getById($id);
		$seo = $this->seo->getAll();

		return view('admin.pages.edit', compact('main', 'seo'));
	}

	/**
	 * @param PageEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(PageEditRequest $request, $id)
	{
		$this->page->update($id, $request->all());

		return redirect()->route('pages.index')->with('success', __('admin.updated-success'));
	}
}
