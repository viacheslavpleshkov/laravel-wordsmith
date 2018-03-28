<?php

namespace app\widgets;

use yii\base\Widget;
use frontend\models\News;

/**
 * @author admin
 */
class NewsList extends Widget
{
    public function run()
    {
        $NewsWidgetListTree = (new News())->getNewsWidgetListTree();
                
        return $this->render('NewsList', [
            'NewsWidgetListTree' => $NewsWidgetListTree,
        ]);
    }
}
