<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\SettingRepository;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Api\v1
 */
class CategoryController extends Controller
{
    /**
     * @var SettingRepository
     */
    protected $settingRepository;
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * CategoryController constructor.
     * @param SettingRepository $settingRepository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(SettingRepository $settingRepository, CategoryRepository $categoryRepository)
    {
        $this->settingRepository = $settingRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $paginate = $this->settingRepository->getPaginateSite();
        $result = $this->categoryRepository->getApiPaginate($paginate);

        return $result;
    }
}
