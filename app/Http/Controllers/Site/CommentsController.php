<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Http\Requests\Site\Comment as CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
	/**
	 * @param CommentRequest $request
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function comments(CommentRequest $request, $id)
	{
		Comment::create([
			'user_id' => Auth::user()->id,
			'article_id' => $id,
			'text' => $request['text'],
			'status' => 1
		]);
		return redirect()->back()->with('success-comment', __('site.success-submit'));
	}
}
