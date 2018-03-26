<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\News;

/**
 * @author admin
 */
class NewsList extends Widget
{
    public function run()
    {
        $list = News::getNewsListTree();
                
        return $this->render('NewsList', [
            'list' => $list,
        ]);
    }
}
