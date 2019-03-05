<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\ArticleRepository;
use App\Repositories\Site\CommentRepository;
use App\Repositories\Site\PageRepository;
use App\Repositories\Site\SettingRepository;

class BlogArticleController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	protected $blog_article;
	/**
	 * @var CommentRepository
	 */
	protected $blog_comment;
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
		$this->blog_article = new ArticleRepository;
		$this->blog_comment = new CommentRepository;
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
		$articles = $this->blog_article->getArticlesAll($paginate);
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
