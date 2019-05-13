<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\CommentStoreRequest;
use App\Http\Requests\Admin\CommentUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Class CommentsController
 * @package App\Http\Controllers\Admin
 */
class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $commentRepository;
	/**
	 * @var UserRepository
	 */
	protected $userRepository;
	/**
	 * @var ArticleRepository
	 */
	protected $articleRepository;
	/**
	 * @var SettingRepository
	 */
	protected $settingRepository;

	/**
	 * CommentsController constructor.
	 * @param CommentRepository $commentRepository
	 * @param UserRepository $userRepository
	 * @param ArticleRepository $articleRepository
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(CommentRepository $commentRepository, UserRepository $userRepository, ArticleRepository $articleRepository, SettingRepository $settingRepository)
	{
		$this->commentRepository = $commentRepository;
		$this->userRepository = $userRepository;
		$this->articleRepository = $articleRepository;
		$this->settingRepository = $settingRepository;
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function index()
	{
		$paginate = $this->settingRepository->getPaginateAdmin();
		$main = $this->commentRepository->getCommentAdminAll($paginate);

		return view('admin.comments.index', compact('main'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		$users = $this->userRepository->getCommentsList();
		$articles = $this->articleRepository->getCommentsList();

		return view('admin.comments.create', compact('users', 'articles'));
	}

    /**
     * @param CommentStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(CommentStoreRequest $request)
	{
		$comments = $this->commentRepository->create($request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') store comment id= ' . $comments->id . ' with params ', $request->all());

		return redirect()->route('comments.index')->with('success', __('admin.created-success'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function show($id)
	{
		$main = $this->commentRepository->getById($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') show comment id= ' . $main->id);

		return view('admin.comments.show', compact('main'));
	}

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function edit($id)
	{
		$main = $this->commentRepository->getById($id);
		$users = $this->userRepository->getCommentsList();
		$articles = $this->articleRepository->getCommentsList();

		return view('admin.comments.edit', compact('main', 'users', 'articles'));
	}

    /**
     * @param CommentUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(CommentUpdateRequest $request, $id)
	{
		$this->commentRepository->update($id, $request->all());
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') update comment id= ' . $id . ' with params ', $request->all());

		return redirect()->route('comments.index')->with('success', __('admin.updated-success'));
	}

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function destroy($id)
	{
		$this->commentRepository->delete($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') destroy comment id= ' . $id);

        return redirect()->route('comments.index')->with('success', __('admin.information-deleted'));
	}
}
