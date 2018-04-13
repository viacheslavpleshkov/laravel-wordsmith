<?php

namespace frontend\controllers;

use frontend\models\Comment;
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
        $news_id=$news->id;
        $comments=Comment::find()->where(['status'=>1,'news_id'=>$news_id])->all();
        return $this->render('view', [
            'news' => $news,
            'comments' => $comments,
        ]);
    }
}