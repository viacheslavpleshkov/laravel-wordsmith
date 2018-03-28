<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news= (new News())->getNewsList();
        return $this->render('index',['news' => $news]);
    }

    public function actionView($id)
    {
        $news = (new News())->getItem($id);
        return $this->render('view', [
            'news' => $news
        ]);
    }
}