<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SeoRepository;
use App\Repositories\UserRepository;
use App\Repositories\SettingRepository;
use App\Http\Requests\Admin\ArticleStoreRequest;
use App\Http\Requests\Admin\ArticleUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Admin
 */
class ArticleController extends BaseController
{
    /**
     * @var ArticleRepository
     */
    protected $articleRepository;
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;
    /**
     * @var SettingRepository
     */
    protected $settingRepository;
    /**
     * @var UserRepository
     */
    protected $userRepository;
    /**
     * @var SeoRepository
     */
    protected $seoRepository;

    /**
     * ArticleController constructor.
     * @param ArticleRepository $articleRepository
     * @param CategoryRepository $categoryRepository
     * @param SettingRepository $settingRepository
     * @param UserRepository $userRepository
     * @param SeoRepository $seoRepository
     */
    public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository, SettingRepository $settingRepository, UserRepository $userRepository, SeoRepository $seoRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->settingRepository = $settingRepository;
        $this->userRepository = $userRepository;
        $this->seoRepository = $seoRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $paginate = $this->settingRepository->getPaginateAdmin();
        $main = $this->articleRepository->getArticlesAdminAll($paginate);

        return view('admin.articles.index', compact('main'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $seo = $this->seoRepository->getStatusAll();
        $categories = $this->categoryRepository->getStatusAll();

        return view('admin.articles.create', compact('seo', 'categories'));
    }

    /**
     * @param ArticleStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleStoreRequest $request)
    {
        $attributes = [
            'title' => $request->title,
            'url' => $request->url,
            'images' => Storage::disk()->put('articles', $request->images),
            'text' => $request->text,
            'category_id' => $request->category_id,
            'seo_id' => $request->seo_id,
            'views' => $request->views,
            'slide' => $request->slide,
            'status' => $request->status,
            'user_id' => Auth::user()->id,
        ];
        $main = $this->articleRepository->create($attributes);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') store article     id= ' . $main->id . ' with params ', $request->all());

        return redirect()->route('articles.index')->with('success', __('admin.created-success'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $main = $this->articleRepository->getById($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') show article id= ' . $main->id);

        return view('admin.articles.show', compact('main'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $main = $this->articleRepository->getById($id);
        $seo = $this->seoRepository->getStatusAll();
        $categories = $this->categoryRepository->getStatusAll();
        $users = $this->userRepository->getAll();

        return view('admin.articles.edit', compact('main', 'categories', 'seo', 'users'));
    }

    /**
     * @param ArticleUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ArticleUpdateRequest $request, $id)
    {
        $this->articleRepository->update($id, $request->except(['url', 'images']));
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') update article id= ' . $id . ' with params ', $request->all());

        return redirect()->route('articles.index')->with('success', __('admin.updated-success'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->articleRepository->delete($id);
        Log::info('admin(role: ' . Auth::user()->role->name . ', id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ') destroy article id= ' . $id);

        return redirect()->route('articles.index')->with('success', __('admin.information-deleted'));
    }
}
