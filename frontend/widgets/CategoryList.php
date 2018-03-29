<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Category;

class CategoryList extends Widget
{
    public function run()
    {
        $categorylist=Category::find()->all();
        return $this->render('CategoryList', [
            'categorylist' => $categorylist,
        ]);
    }
}