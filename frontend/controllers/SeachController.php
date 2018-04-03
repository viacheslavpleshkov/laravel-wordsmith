<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;
use yii\data\Pagination;

class SeachController extends Controller
{
    public function actionSearch($query)
    {
        $search = Serial::find()->where(['or',['like', 'name_serial', $query],['like', 'description_serial', $query]])->limit(30);
        $searchDataprovider = new ActiveDataProvider([
            'query' => $search,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);
        return $this->render('search', [
            'searchDataprovider' => $searchDataprovider
        ]);
    }
}