<?php
 namespace frontend\models;
 use Yii;
     class News{
         public static function getNewsList(){
             return Yii::$app->db->createCommand('SELECT * FROM news')->queryAll();
         }
         public static function getItem($id)
         {
             return Yii::$app->db->createCommand("SELECT * FROM news WHERE id = $id")->queryOne();
         }
     }