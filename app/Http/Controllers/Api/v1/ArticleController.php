<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Api\v1
 */
class ArticleController extends Controller
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
     * ArticleController constructor.
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
    public function index()
    {
        $paginate = $this->settingRepository->getPaginateSite();
        $result = $this->articleRepository->getApiPaginate($paginate);

        return $result;
    }
}
