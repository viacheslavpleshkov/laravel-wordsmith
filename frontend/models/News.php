<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\Query;

class News extends Model
{
    public static function getNewsList()
    {
        $query = new Query();
        $query->select('*')
            ->from(’news’);
        return Yii::$app->db->$query->createCommand()->queryAll();

    }
}