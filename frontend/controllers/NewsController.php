<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $data= (new News())->getNewsList();
        return $this->render('index',[
            'news'=>$data['news'],
            'pagination'=>$data['pagination'],
            ]);
    }

    public function actionView($id)
    {
        $news = (new News())->getItem($id);
        return $this->render('view', [
            'news' => $news
        ]);
    }
}