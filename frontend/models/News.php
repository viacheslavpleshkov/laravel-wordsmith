<?php

namespace frontend\models;

use yii\base\Model;
use yii\db\Query;
use yii\db\QueryBuilder;
use yii\data\Pagination;

class News extends Model
{
    public function getNewsList()
    {
        $query = News::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>2]);
        $news = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['news'] = $news;
        $data['pagination'] = $pagination;

        return $data;
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