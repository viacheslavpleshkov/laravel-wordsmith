<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\SeoRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\SeoEditRequest;
use App\Http\Requests\Admin\SeoStoreRequest;

class SeoController extends BaseController
{
	/**
	 * @var SeoRepository
	 */
	protected $seo;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * SeoController constructor.
	 */
	public function __construct()
	{
		$this->seo = new SeoRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index()
    {
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->seo->getSeoAdminAll($paginate);

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
    	$this->seo->create($request->all());

        return redirect()->route('seo.index')->with('success', __('admin.created-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function show($id)
    {
        $main = $this->seo->getById($id);

        return view('admin.seo.show', compact('main'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function edit($id)
    {
        $main = $this->seo->getById($id);

        return view('admin.seo.edit', compact('main'));
    }

	/**
	 * @param SeoEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(SeoEditRequest $request, $id)
    {
    	$this->seo->update($id, $request->all());

        return redirect()->route('seo.index')->with('success', __('admin.updated-success'));
    }

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function destroy($id)
    {
    	$this->seo->delete($id);

        return redirect()->route('seo.index')->with('success', __('admin.information-deleted'));
    }
}
