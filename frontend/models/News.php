<?php

namespace frontend\models;

use yii\base\Model;
use yii\db\Query;

class News extends Model
{
    public function getNewsList()
    {
        $command = (new Query())
            ->select('*')
            ->from('news')
            ->orderBy('id DESC')
            ->all();
        return $command;
    }
    public function getItem($id)
    {
        $command = (new Query())
            ->select('*')
            ->from('news')
            ->where("id=$id")
            ->all();
        return $command;
    }
    public function getNewsWidgetListTree()
    {
        $command = (new Query())
            ->select('*')
            ->from('news')
            ->orderBy('id DESC')
            ->limit(3)
            ->all();
        return $command;
    }
}