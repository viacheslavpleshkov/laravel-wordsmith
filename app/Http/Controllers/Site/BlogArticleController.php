<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;
use App\Repositories\PageRepository;
use App\Repositories\SettingRepository;

class BlogArticleController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $article;
	/**
	 * @var CommentRepository
	 */
	protected $comment;
	/**
	 * @var PageRepository
	 */
	protected $page;
	/**
	 * @var SettingRepository
	 */
	protected $setting;

	/**
	 * BlogArticleController constructor.
	 */
	public function __construct()
	{
		$this->article = new ArticleRepository;
		$this->comment = new CommentRepository;
		$this->page = new PageRepository;
		$this->setting = new SettingRepository();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$main = $this->page->getPageBlog();
		$paginate = $this->setting->getPaginateSite();
		$articles = $this->article->getArticlesAll($paginate);
		return view('site.articles.index', compact('main', 'articles'));
	}

	/**
	 * @param $url
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function view($url)
	{
		$main = $this->article->getArticle($url);
		if (isset($main)) {
			$this->article->setView($main);
			$previous = $this->article->getPreviousPost($main->id);
			$next = $this->article->getNextPost($main->id);
			$comments = $this->comment->getCommentsAll($main->id);
			$count = $this->comment->getCountCommentsAll($main->id);
			return view('site.articles.view', compact('main', 'previous', 'next', 'comments', 'count'));
		} else {
			abort(404);
		}
	}
}
