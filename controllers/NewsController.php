<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        
        $max = Yii::$app->params['maxNewsInList'];
        
        $list = News::getNewsList($max);
                
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