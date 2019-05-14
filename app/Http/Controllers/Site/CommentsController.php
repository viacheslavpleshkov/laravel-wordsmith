<?php

namespace App\Http\Controllers\Site;

use App\Models\Comment;
use App\Events\CommentSent;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentsController extends BaseController
{
    public function store($id)
    {
        $this->validate(request(), [
            'body' => 'required',
        ]);
        $user = auth()->user();
        $comment = Comment::create([
            'user_id' => $user->id,
            'article_id' => $id,
            'body' => request('body'),
            'status' => 1,
        ]);
        broadcast(new CommentSent($user, $comment))->toOthers();
        return ['status' => 'Message Sent!'];
    }
}