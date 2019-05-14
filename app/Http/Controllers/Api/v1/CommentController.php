<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\CommentRepository;

/**
 * Class CommentController
 * @package App\Http\Controllers\Api\v1
 */
class CommentController extends BaseController
{
    /**
     * @var CommentRepository
     */
    protected $commentRepository;

    /**
     * CommentController constructor.
     * @param CommentRepository $commentRepository
     */
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function index($id)
    {
        $main = $this->commentRepository->getApiArticleCommentsAll($id);

        return $main;
    }
}
