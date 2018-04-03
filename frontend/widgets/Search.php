<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;
use frontend\models\SearchForm;
use Yii;

class Search extends Widget
{
    public function run()
    {
        $model = new SearchForm();
        $data=News::find()->select('title')->column();
        return $this->render('Search', ['model' => $model,'data'=>$data]);
    }
}