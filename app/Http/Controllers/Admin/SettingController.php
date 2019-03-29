<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SettingEditRequest;

class SettingController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * SettingController constructor.
	 */
	public function __construct()
	{
		$this->setting = new SettingRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = $this->setting->getById(1);

		return view('admin.settings.index', compact('main'));
	}

	/**
	 * @param SettingRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(SettingEditRequest $request)
	{
		$this->setting->update(1, $request->all());

        return redirect()->route('settings.index')->with('success', __('admin.updated-success'));
    }
}