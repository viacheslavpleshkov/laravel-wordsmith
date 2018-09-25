<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function comments(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'article_id' => $id,
            'text' => $request['text'],
            'status' => 1
        ]);
        return redirect()->back()->with('success-comment', __('site.success-submit'));
    }
}
