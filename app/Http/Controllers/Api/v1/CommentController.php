<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Comment;
use App\Events\CommentSent;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Repositories\CommentRepository;

/**
 * Class CommentController
 * @package App\Http\Controllers\Api\v1
 */
class CommentController extends BaseController
{
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Article $post)
    {
        $this->validate(request(), [
            'body' => 'required',
        ]);
        $user = auth()->user();
        $comment = Comment::create([
            'user_id' => $user->id,
            'article_id' => $post->id,
            'body' => request('body'),
            'status' => 1,
        ]);
        broadcast(new CommentSent($user, $comment))->toOthers();
        return ['status' => 'Message Sent!'];
    }

    public function index($id)
    {
        return Comment::where('status', 1)->where('article_id', $id)->with('user')->get();
    }
}
