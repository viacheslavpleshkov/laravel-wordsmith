<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\CommentRequest as CommentRequest;
use App\Repositories\Site\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $blog_comment;

	/**
	 * CommentsController constructor.
	 */
	public function __construct()
	{
		$this->blog_comment = new CommentRepository();
	}

	/**
	 * @param CommentRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function comments(CommentRequest $request, $id)
	{
		$data['user_id'] = Auth::user()->id;
		$data['article_id'] = $id;
		$data['request'] = $request;
		$this->blog_comment->create($data);

		return redirect()->back()->with('success-comment', __('site.success-submit'));
	}
}
