<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;

class NewsList extends Widget
{
    public function run()
    {
        $NewsWidgetListTree=News::find()->where(['status'=>'1'])->orderBy(['id' => SORT_DESC])->limit(3)->all();

        return $this->render('NewsList', [
            'NewsWidgetListTree' => $NewsWidgetListTree,
        ]);
    }
}
