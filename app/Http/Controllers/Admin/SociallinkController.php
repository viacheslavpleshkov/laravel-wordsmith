<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SettingRepository;
use App\Repositories\SociallinkRepository;
use App\Http\Requests\Admin\SociallinkStoreRequest;
use App\Http\Requests\Admin\SociallinkUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Class SociallinkController
 * @package App\Http\Controllers\Admin
 */
class SociallinkController extends BaseController
{
	/**
	 * @var SociallinkRepository
	 */
	protected $sociallinkRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * SociallinkController constructor.
	 * @param SociallinkRepository $sociallinkRepository
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(SociallinkRepository $sociallinkRepository, SettingRepository $settingRepository)
	{
		$this->sociallinkRepository = $sociallinkRepository;
		$this->settingRepository = $settingRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->sociallinkRepository->getSociallinkAdminAll($paginate);

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
		$sociallink = $this->sociallinkRepository->create($request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') store sociallink id= ' . $sociallink->id . ' with params ', $request->all());

		return redirect()->route('social-link.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->sociallinkRepository->getById($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') show sociallink id= ' . $main->id);

		return view('admin.social-link.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->sociallinkRepository->getById($id);

		return view('admin.social-link.edit', compact('main'));
	}

	/**
	 * @param SociallinkUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(SociallinkUpdateRequest $request, $id)
	{
		$this->sociallinkRepository->update($id, $request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') update sociallink id= ' . $id . ' with params ', $request->all());

		return redirect()->route('social-link.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->sociallinkRepository->getById($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') destroy sociallink id= ' . $id);

		return redirect()->route('social-link.index')->with('success', __('admin.information-deleted'));
	}
}
