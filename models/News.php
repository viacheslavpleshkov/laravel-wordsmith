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
        
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        return $result;        
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
    
    
}