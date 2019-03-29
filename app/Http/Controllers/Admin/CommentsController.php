<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\CommentStoreRequest;
use App\Http\Requests\Admin\CommentEditRequest;

class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $comment;
	/**
	 * @var UserRepository
	 */
	protected $user;
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * CommentsController constructor.
	 */
	public function __construct()
	{
		$this->comment = new CommentRepository();
		$this->user = new UserRepository();
		$this->article = new ArticleRepository();
		$this->setting = new SettingRepository();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$paginate = $this->setting->getPaginateAdmin();
		$main = $this->comment->getCommentAdminAll($paginate);

		return view('admin.comments.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$users = $this->user->getCommentsList();
		$articles = $this->article->getCommentsList();

		return view('admin.comments.create', compact('users', 'articles'));
	}

	/**
	 * @param CommentStoreRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(CommentStoreRequest $request)
	{
		$this->comment->create($request->all());

		return redirect()->route('comments.index')->with('success', __('admin.created-success'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$main = $this->comment->getById($id);

		return view('admin.comments.show', compact('main'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */

	public function edit($id)
	{
		$main = $this->comment->getById($id);
		$users = $this->user->getCommentsList();
		$articles = $this->article->getCommentsList();

		return view('admin.comments.edit', compact('main', 'users', 'articles'));
	}

	/**
	 * @param CommentEditRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(CommentEditRequest $request, $id)
	{
		$this->comment->update($id, $request->all());

		return redirect()->route('comments.index')->with('success', __('admin.updated-success'));
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id)
	{
		$this->comment->delete($id);

		return redirect()->route('comments.index')->with('success', __('admin.information-deleted'));
	}
}
