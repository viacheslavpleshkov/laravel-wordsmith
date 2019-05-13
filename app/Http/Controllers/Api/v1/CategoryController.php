<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Api\v1
 */
class CategoryController extends BaseController
{
    /**
     * @var SettingRepository
     */
    protected $settingRepository;
    /**
     * @var ArticleRepository
     */
    protected $articleRepository;

    /**
     * CategoryController constructor.
     * @param SettingRepository $settingRepository
     * @param ArticleRepository $articleRepository
     */
    public function __construct(SettingRepository $settingRepository, ArticleRepository $articleRepository)
    {
        $this->settingRepository = $settingRepository;
        $this->articleRepository = $articleRepository;
    }

    /**
     * @return mixed
     */
    public function index($id)
    {
        $paginate = $this->settingRepository->getPaginateSite();
        $result = $this->articleRepository->getApiCategoryAndPaginate($id, $paginate);

        return $result;
    }
}
