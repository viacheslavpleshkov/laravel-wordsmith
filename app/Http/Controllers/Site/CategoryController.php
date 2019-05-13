<?php

namespace App\Http\Controllers\Site;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Site
 */
class CategoryController extends BaseController
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
     * CategoryController constructor.
     * @param ArticleRepository $articleRepository
     * @param CategoryRepository $categoryRepository
     * @param SettingRepository $settingRepository
     */
    public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository, SettingRepository $settingRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->settingRepository = $settingRepository;
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($url)
    {
        $category = $this->categoryRepository->getCategoryUrl($url);
        if (isset($category)) {
            $title = $category->name;
            $id = $category->id;

            return view('site.categories.view', compact('id', 'title'));
        } else {
            abort(404);
        }
    }
}
