<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SettingRepository;
use App\Repositories\SociallinkRepository;
use App\Http\Requests\Admin\SociallinkStoreRequest;
use App\Http\Requests\Admin\SociallinkEditRequest;

class SociallinkController extends BaseController
{
	/**
	 * @var SociallinkRepository
	 */
	protected $sociallink;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * SociallinkController constructor.
	 */
	public function __construct()
	{
		$this->sociallink = new SociallinkRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->sociallink->getSociallinkAdminAll($paginate);

		return view('admin.social-link.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return view('admin.social-link.create');
	}

	/**
	 * @param SociallinkStoreRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(SociallinkStoreRequest $request)
	{
		$this->sociallink->create($request->all());

		return redirect()->route('social-link.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->sociallink->getById($id);

		return view('admin.social-link.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->sociallink->getById($id);

		return view('admin.social-link.edit', compact('main'));
	}

	/**
	 * @param SociallinkEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(SociallinkEditRequest $request, $id)
	{
		$this->sociallink->update($id, $request->all());

		return redirect()->route('social-link.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->sociallink->getById($id);

		return redirect()->route('social-link.index')->with('success', __('admin.information-deleted'));
	}
}
