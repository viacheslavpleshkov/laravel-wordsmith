<?php

namespace app\models;

use Yii;

class News
{
    
    /**
     * @param integer $max
     * @return array
     */
    public static function getNewsList()
    {
        $sql = 'SELECT * FROM article';

        return Yii::$app->db->createCommand($sql)->queryAll();

    }
    
    /**
     * @param integer $id
     * @return array|false
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM article WHERE id = $id";
        
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    public static function getNewsListTree()
    {
        $sql = 'SELECT * FROM article LIMIT 3';
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        return $result;
    }
    
}