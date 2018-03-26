<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;

class CategoryController extends Controller
{
    public function actionIndex()
    {

        $max = Yii::$app->params['maxNewsInList'];

        $list = Category::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    public function actionView($id)
    {
        $item = News::getItem($id);

        return $this->render('view', [
            'item' => $item
        ]);
    }
}