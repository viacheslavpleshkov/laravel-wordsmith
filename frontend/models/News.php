<?php
 namespace frontend\models;
 use yii\base\Model;
 use Yii;
     class News extends Model{
         public static function getNewsList(){
             return Yii::$app->db->createCommand('SELECT * FROM news')->queryAll();
         }
         public static function getItem($id)
         {
             return Yii::$app->db->createCommand("SELECT * FROM news WHERE id = $id")->queryOne();
         }
     }