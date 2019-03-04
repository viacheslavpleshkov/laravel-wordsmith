<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\Site\BlogArticleRepository;
use App\Repositories\Site\BlogCommentRepository;
use App\Repositories\Site\PageRepository;

class BlogArticleController extends Controller
{
	/**
	 * @var BlogArticleRepository
	 */
	protected $blog_article;
	/**
	 * @var BlogCommentRepository
	 */
	protected $blog_comment;
	/**
	 * @var PageRepository
	 */
	protected $page;

	public function __construct(BlogArticleRepository $blog_article, BlogCommentRepository $blog_comment, PageRepository $page)
	{
		$this->blog_article = $blog_article;
		$this->blog_comment = $blog_comment;
		$this->page = $page;
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = $this->page->getBlog();
		$articles = $this->blog_article->getArticlesAll();
		return view('site.articles.index', compact('main', 'articles'));
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$main = $this->blog_article->getArticle($url);
		if (isset($main)) {
			$this->blog_article->setView($main);
			$previous = $this->blog_article->getPreviousPost($main->id);
			$next = $this->blog_article->getNextPost($main->id);
			$comments = $this->blog_comment->getCommentsAll($main->id);
			$count = $this->blog_comment->getCountCommentsAll($main->id);
			return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
		} else {
			abort(404);
		}
	}
}
