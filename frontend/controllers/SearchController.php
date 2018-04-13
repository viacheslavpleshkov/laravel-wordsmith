<?php

namespace frontend\controllers;

use Yii;
use frontend\models\News;
use yii\data\Pagination;
use yii\web\Controller;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $search = Yii::$app->request->get()["SearchForm"]['search'];
        $query = News::find()->orderBy(['id' => SORT_DESC])->where(['status'=>'1'])->andWhere(['like', 'title', $search]);
        //Pagination
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 10]);
        $news = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'news' => $news,
            'search' => $search,
            'pagination' => $pagination,
        ]);
    }
}