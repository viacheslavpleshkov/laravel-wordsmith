<?php

namespace App\Http\Controllers\Site;

use App\Repositories\CommentRepository;
use App\Events\CommentSent;
use Illuminate\Http\Request;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

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
     * @param $id
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($id)
    {
        $this->validate(request(), [
            'body' => 'required|string|max:4096',
//            'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('comments')]

        ]);

        $user = auth()->user();
        $attribute = [
            'user_id' => $user->id,
            'article_id' => $id,
            'body' => request('body'),
            'status' => 1,
        ];
        $comment = $this->commentRepository->create($attribute);
        broadcast(new CommentSent($user, $comment))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}