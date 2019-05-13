<?php

namespace App\Http\Controllers\Site;

use App\Events\CommentSent;
use App\Http\Requests\Site\CommentRequest;
use App\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

/**
 * Class CommentsController
 * @package App\Http\Controllers\Site
 */
class CommentsController extends BaseController
{
	/**
	 * @var CommentRepository
	 */
	protected $commentRepository;

	/**
	 * CommentsController constructor.
	 * @param CommentRepository $commentRepository
	 */
	public function __construct(CommentRepository $commentRepository)
	{
		$this->commentRepository = $commentRepository;
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
        $comment = $this->commentRepository->create($attributes);
        $user = auth()->user();
        broadcast(new CommentSent($user, $comment))->toOthers();


        return ['status' => 'Message Sent!'];
	}
}
