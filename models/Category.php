<?php

namespace app\models;

use yii\base\Model;
use Yii;

class Category extends Model
{
    public static function getCategoryList()
    {
        $sql='SELECT * FROM category';

        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM category WHERE id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}