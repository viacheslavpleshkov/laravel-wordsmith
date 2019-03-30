<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SeoRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SeoUpdateRequest;
use App\Http\Requests\Admin\SeoStoreRequest;

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
    	$this->seoRepository->create($request->all());

        return redirect()->route('seo.index')->with('success', __('admin.created-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show($id)
    {
        $main = $this->seoRepository->getById($id);

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

        return redirect()->route('seo.index')->with('success', __('admin.updated-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function destroy($id)
    {
    	$this->seoRepository->delete($id);

        return redirect()->route('seo.index')->with('success', __('admin.information-deleted'));
    }
}
