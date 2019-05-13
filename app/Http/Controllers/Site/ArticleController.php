<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;
use App\Repositories\PageRepository;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Site
 */
class ArticleController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $articleRepository;
	/**
	 * @var CommentRepository
	 */
	protected $commentRepository;
	/**
	 * @var PageRepository
	 */
	protected $pageRepository;

    /**
     * ArticleController constructor.
     * @param ArticleRepository $articleRepository
     * @param CommentRepository $commentRepository
     * @param PageRepository $pageRepository
     */
	public function __construct(ArticleRepository $articleRepository, CommentRepository $commentRepository, PageRepository $pageRepository)
	{
		$this->articleRepository = $articleRepository;
		$this->commentRepository = $commentRepository;
		$this->pageRepository = $pageRepository;
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function index()
	{
		$main = $this->pageRepository->getPageBlog();
		return view('site.articles.index', compact('main'));
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$main = $this->articleRepository->getArticle($url);
		if (isset($main)) {
			$this->articleRepository->setView($main);
			$previous = $this->articleRepository->getPreviousPost($main->id);
			$next = $this->articleRepository->getNextPost($main->id);
			$comments = $this->commentRepository->getCommentsAll($main->id);
			$count = $this->commentRepository->getCountCommentsAll($main->id);

			return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
		} else {
			abort(404);
		}
	}
}
