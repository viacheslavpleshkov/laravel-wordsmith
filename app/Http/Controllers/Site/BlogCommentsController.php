<?php

namespace App\Http\Controllers\Site;

use App\Models\BlogComment;
use App\Http\Requests\Site\Comment as CommentRequest;
use App\Repositories\Site\BlogCategoryRepository;
use Illuminate\Support\Facades\Auth;

class CommentsController extends BlogCategoryRepository
{
	/**
	 * @param CommentRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function comments(CommentRequest $request, $id)
	{
		BlogComment::create([
			'user_id' => Auth::user()->id,
			'article_id' => $id,
			'text' => $request['text'],
			'status' => 1
		]);
		return redirect()->back()->with('success-comment', __('site.success-submit'));
	}
}
