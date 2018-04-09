<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;
use yii\data\Pagination;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $query = News::find()->where(['status'=>'1'])->orderBy(['id' => SORT_DESC]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>10]);
        $news = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index',[
            'news'=> $news,
            'pagination'=> $pagination,
            ]);
    }

    public function actionView($url)
    {
        $news= News::find()->where(['status'=>'1','url'=> $url])->one();
        $news->viewsCounter();
        return $this->render('view', [
            'news' => $news
        ]);
    }
}