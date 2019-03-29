<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SeoRepository;
use App\Repositories\UserRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\ArticleStoreRequest;
use App\Http\Requests\Admin\ArticleEditRequest;
use Illuminate\Support\Facades\Auth;


class ArticleController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var CategoryRepository
	 */
	protected $category;
	/**
	 * @var SettingRepository
	 */
	protected $setting;
	/**
	 * @var UserRepository
	 */
	protected $user;
	/**
	 * @var SeoRepository
	 */
	protected $seo;

	/**
	 * ArticleController constructor.
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository();
		$this->category = new CategoryRepository();
		$this->setting = new SettingRepository();
		$this->user = new UserRepository();
		$this->seo = new SeoRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->article->getArticlesAdminAll($paginate);

		return view('admin.articles.index', compact('main'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$seo = $this->seo->getStatusAll();
		$categories = $this->category->getStatusAll();

		return view('admin.articles.create', compact('seo', 'categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ArticleStoreRequest $request)
	{
		$attributes = [
			'title' => $request->title,
			'url' => $request->url,
			'images' => $request->file('images')->store('articles', 'public'),
			'text' => $request->text,
			'category_id' => $request->category_id,
			'seo_id' => $request->seo_id,
			'views' => $request->views,
			'slide' => $request->slide,
			'status' => $request->status,
			'user_id' => Auth::user()->id,
		];
		$this->article->create($attributes);

		return redirect()->route('articles.index')->with('success', __('admin.created-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$main = $this->article->getById($id);

		return view('admin.articles.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit($id)
	{
		$main = $this->article->getById($id);
		$seo = $this->seo->getStatusAll();
		$categories = $this->category->getStatusAll();
		$users = $this->user->getAll();

		return view('admin.articles.edit', compact('main', 'categories', 'seo', 'users'));
	}

	/**
	 * @param ArticleEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(ArticleEditRequest $request, $id)
	{
		$attributes = [
			'title' => $request->title,
			'url' => $request->url,
			'images' => $request->file('images')->store('articles', 'public'),
			'text' => $request->text,
			'category_id' => $request->category_id,
			'seo_id' => $request->seo_id,
			'views' => $request->views,
			'slide' => $request->slide,
			'status' => $request->status,
			'user_id' => $request->user_id
		];
		$this->article->update($id, $attributes);

		return redirect()->route('articles.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$this->article->delete($id);

		return redirect()->route('articles.index')->with('success', __('admin.information-deleted'));
	}
}
