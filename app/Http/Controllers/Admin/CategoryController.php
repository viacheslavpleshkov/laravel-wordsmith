<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoryRepository;
use App\Repositories\SeoRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryEditRequest;


class CategoryController extends BaseController
{
	/**
	 * @var CategoryRepository
	 */
	protected $category;
	/**
	 * @var SeoRepository
	 */
	protected $seo;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * CategoryController constructor.
	 */
	public function __construct()
	{
		$this->category = new CategoryRepository();
		$this->seo = new SeoRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->category->getArticlesAdminAll($paginate);

		return view('admin.categories.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$seo = $this->seo->getStatusAll();

		return view('admin.categories.create', compact('seo'));
	}

	/**
	 * @param CategoryStoreRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(CategoryStoreRequest $request)
	{
		$this->category->create($request->all());

		return redirect()->route('categories.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->category->getById($id);

		return view('admin.categories.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->category->getById($id);
		$seo = $this->seo->getStatusAll();

		return view('admin.categories.edit', compact('main', 'seo'));
	}

	/**
	 * @param CategoryEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(CategoryEditRequest $request, $id)
	{
		$this->category->update($id, $request->all());

		return redirect()->route('categories.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->category->delete($id);

        return redirect()->route('categories.index')->with('success', __('admin.information-deleted'));
    }
}
