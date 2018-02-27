<?php
namespace frontend\widgets\newList;
use yii\base\Widget;
use frontend\models\News;
class NewList extends Widget{
    public $showLimit;
    public function run(){
       $max=News::getNewsList('2');
        $news=News::getNewsList();
        return $this->render('block', [
            'news' => $news,
        ]);
    }
}