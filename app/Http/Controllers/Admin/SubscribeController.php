<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SubscribeRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SubscribeStoreRequest;
use App\Http\Requests\Admin\SubscribeUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SubscribeController extends BaseController
{
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;
	/**
	 * @var SubscribeRepository
	 */
	protected $subscribeRepository;

	/**
	 * SubscribeController constructor.
	 * @param SettingRepository $settingRepository
	 * @param SubscribeRepository $subscribeRepository
	 */
	public function __construct(SettingRepository $settingRepository, SubscribeRepository $subscribeRepository)
	{
		$this->settingRepository = $settingRepository;
		$this->subscribeRepository = $subscribeRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->subscribeRepository->getSubscribeAdminAll($paginate);

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
		$subscribe = $this->subscribeRepository->create($request->all());
		Log::info('admin(role: ' . Auth::user()->role->name . ', email: ' . Auth::user()->email . ') add subscribe id= ' . $subscribe->id . ' with params ', $request->all());

		return redirect()->route('subscribes.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->subscribeRepository->getById($id);
		Log::info('admin(role: ' . Auth::user()->role->name . ', email: ' . Auth::user()->email . ') show subscribe id= ' . $id);

		return view('admin.subscribes.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->subscribeRepository->getById($id);
		return view('admin.subscribes.edit', compact('main'));
	}

	/**
	 * @param SubscribeUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(SubscribeUpdateRequest $request, $id)
	{
		$this->subscribeRepository->update($id, $request->all());
		Log::info('admin(role: ' . Auth::user()->role->name . ', email: ' . Auth::user()->email . ') edit subscribe id= ' . $id . ' with params ', $request->all());

		return redirect()->route('subscribes.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->subscribeRepository->delete($id);
		Log::info('admin(role: ' . Auth::user()->role->name . ', email: ' . Auth::user()->email . ') delete subscribe id= ' . $id);

		return redirect()->route('subscribes.index')->with('success', __('admin.information-deleted'));
	}
}
