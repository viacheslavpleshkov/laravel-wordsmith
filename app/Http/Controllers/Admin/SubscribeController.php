<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SubscribeRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SubscribeStoreRequest;
use App\Http\Requests\Admin\SubscribeEditRequest;

class SubscribeController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var SubscribeRepository
	 */
	protected $subscribe;

	/**
	 * SubscribeController constructor.
	 */
	public function __construct()
	{
		$this->setting = new SettingRepository();
		$this->subscribe = new SubscribeRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->subscribe->getSubscribeAdminAll($paginate);

		return view('admin.subscribes.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return view('admin.subscribes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(SubscribeStoreRequest $request)
	{
		$this->subscribe->create($request->all());

		return redirect()->route('subscribes.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->subscribe->getById($id);

		return view('admin.subscribes.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->subscribe->getById($id);
		return view('admin.subscribes.edit', compact('main'));
	}

	/**
	 * @param SubscribeEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(SubscribeEditRequest $request, $id)
	{
		$this->subscribe->update($id, $request->all());

		return redirect()->route('subscribes.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->subscribe->delete($id);

		return redirect()->route('subscribes.index')->with('success', __('admin.information-deleted'));
	}
}
