<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoryRepository;
use App\Repositories\SeoRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends BaseController
{
	/**
	 * @var CategoryRepository
	 */
	protected $categoryRepository;
	/**
	 * @var SeoRepository
	 */
	protected $seoRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * CategoryController constructor.
	 * @param CategoryRepository $categoryRepository
	 * @param SeoRepository $seoRepository
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(CategoryRepository $categoryRepository, SeoRepository $seoRepository, SettingRepository $settingRepository)
	{
		$this->categoryRepository = $categoryRepository;
		$this->seoRepository = $seoRepository;
		$this->settingRepository = $settingRepository;
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->categoryRepository->getArticlesAdminAll($paginate);

		return view('admin.categories.index', compact('main'));
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function create()
	{
		$seo = $this->seoRepository->getStatusAll();

		return view('admin.categories.create', compact('seo'));
	}

    /**
     * @param CategoryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(CategoryStoreRequest $request)
	{
		$category = $this->categoryRepository->create($request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') store category id= ' . $category->id . ' with params ', $request->all());

		return redirect()->route('categories.index')->with('success', __('admin.created-success'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function show($id)
	{
		$main = $this->categoryRepository->getById($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') show category id= ' . $main->id);

		return view('admin.categories.show', compact('main'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function edit($id)
	{
		$main = $this->categoryRepository->getById($id);
		$seo = $this->seoRepository->getStatusAll();

		return view('admin.categories.edit', compact('main', 'seo'));
	}

    /**
     * @param CategoryUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(CategoryUpdateRequest $request, $id)
	{
		$this->categoryRepository->update($id, $request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') update category id= ' . $id . ' with params ', $request->all());

		return redirect()->route('categories.index')->with('success', __('admin.updated-success'));
	}

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function destroy($id)
	{
		$this->categoryRepository->delete($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') destroy category id= ' . $id);

		return redirect()->route('categories.index')->with('success', __('admin.information-deleted'));
	}
}
