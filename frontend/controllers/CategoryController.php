<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;
use yii\data\Pagination;

class CategoryController extends Controller
{
    public function actionView($id)
    {
        $query = News::find()->where(['status'=>'1','category_id' => $id])->orderBy(['id' => SORT_DESC]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 10]);
        $category = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('view', [
            'category' => $category,
            'pagination' => $pagination,
        ]);
    }
}