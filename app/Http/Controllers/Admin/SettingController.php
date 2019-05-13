<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SettingUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Class SettingController
 * @package App\Http\Controllers\Admin
 */
class SettingController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * SettingController constructor.
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(SettingRepository $settingRepository)
	{
		$this->settingRepository = $settingRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = $this->settingRepository->getById(1);

		return view('admin.settings.index', compact('main'));
	}

    /**
     * @param SettingUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(SettingUpdateRequest $request)
	{
		$this->settingRepository->update(1, $request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') update setting with params ', $request->all());

		return redirect()->route('settings.index')->with('success', __('admin.updated-success'));
    }
}