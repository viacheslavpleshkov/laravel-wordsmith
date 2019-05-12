<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\SettingRepository;

class ArticleController extends Controller
{
    protected $settingRepository;
    protected $articleRepository;

    public function __construct(SettingRepository $settingRepository, ArticleRepository $articleRepository)
    {
        $this->settingRepository = $settingRepository;
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $paginate = $this->settingRepository->getPaginateSite();
        $result = $this->articleRepository->getApiPaginate($paginate);

        return $result;
    }
}
