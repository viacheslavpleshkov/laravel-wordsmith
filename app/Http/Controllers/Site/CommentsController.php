<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\Site\CommentRequest;
use App\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $comment;

	/**
	 * CommentsController constructor.
	 */
	public function __construct()
	{
		$this->comment = new CommentRepository();
	}

	/**
	 * @param CommentRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function comments(CommentRequest $request, $id)
	{
		$attributes = [
			'user_id' => Auth::user()->id,
			'article_id' => $id,
			'text' => $request->text,
			'status' => 1
		];
		$this->comment->create($attributes);

		return redirect()->back()->with('success-comment', __('site.success-submit'));
	}
}
