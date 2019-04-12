<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SeoRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SeoUpdateRequest;
use App\Http\Requests\Admin\SeoStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SeoController extends BaseController
{
	/**
	 * @var SeoRepository
	 */
	protected $seoRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * SeoController constructor.
	 * @param SeoRepository $seoRepository
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(SeoRepository $seoRepository, SettingRepository $settingRepository)
	{
		$this->seoRepository = $seoRepository;
		$this->settingRepository = $settingRepository;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index()
    {
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->seoRepository->getSeoAdminAll($paginate);

        return view('admin.seo.index', compact('main'));
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function create()
    {
        return view('admin.seo.create');
    }

	/**
	 * @param SeoStoreRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(SeoStoreRequest $request)
    {
    	$seo = $this->seoRepository->create($request->all());
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') add comment id= '. $seo->id . ' with params ', $request->all());

		return redirect()->route('seo.index')->with('success', __('admin.created-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show($id)
    {
        $main = $this->seoRepository->getById($id);
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') show seo id= '. $id);

		return view('admin.seo.show', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function edit($id)
    {
        $main = $this->seoRepository->getById($id);

        return view('admin.seo.edit', compact('main'));
    }

	/**
	 * @param SeoUpdateRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(SeoUpdateRequest $request, $id)
    {
    	$this->seoRepository->update($id, $request->all());
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') edit seo id= '. $id . ' with params ', $request->all());

		return redirect()->route('seo.index')->with('success', __('admin.updated-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function destroy($id)
    {
    	$this->seoRepository->delete($id);
		Log::info('admin(role: '.Auth::user()->role->name.', email: '.Auth::user()->email.') delete seo id= '. $id);

		return redirect()->route('seo.index')->with('success', __('admin.information-deleted'));
    }
}
