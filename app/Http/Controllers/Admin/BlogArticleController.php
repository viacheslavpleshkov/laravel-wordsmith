<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\ArticleStoreRequest;
use App\Http\Requests\Admin\ArticleEditRequest;
use Illuminate\Support\Facades\Auth;


class BlogArticleController extends BaseController
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
	 * BlogArticleController constructor.
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository();
		$this->category = new CategoryRepository();
		$this->setting = new SettingRepository();
		$this->user = new UserRepository();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->article->getArticlesAll($paginate);
		$main = Article::desc()->paginate($paginate);
		return view('admin.articles.index', compact('main'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$seo = Seo::where('status', 1)->get();
		$categories = Category::where('status', 1)->get();
		return view('admin.articles.create', compact('seo', 'categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ArticleStoreRequest $request)
	{
		Article::create([
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
		]);
		return redirect()->route('articles.index')->with('success', __('admin.created-success'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$main = Article::find($id);
		return view('admin.articles.show', compact('main'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$main = Article::find($id);
		$seo = Seo::where('status', 1)->get();
		$categories = Category::where('status', 1)->get();
		$users = User::all();
		return view('admin.articles.edit', compact('main', 'categories', 'seo', 'users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ArticleEditRequest $request, $id)
	{
		Article::find($id)->update([
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
		]);
		return redirect()->route('articles.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Article::find($id)->delete();
		return redirect()->route('articles.index')->with('success', __('admin.information-deleted'));
	}
}
