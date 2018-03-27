<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Category;

class CategoryList extends Widget
{
    public function run()
    {
        $list=Category::getCategoryList();
        return $this->render('CategoryList', [
            'list' => $list,
        ]);
    }
}