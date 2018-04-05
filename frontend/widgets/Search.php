<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;
use frontend\models\SearchForm;

class Search extends Widget
{
    public function run()
    {
        $model = new SearchForm();
        $data=News::find()->select('title')->where(['status' => '1'])->orderBy(['id' => SORT_DESC])->column();
        return $this->render('Search', ['model' => $model,'data'=>$data]);
    }
}