<?php
 namespace frontend\models;
 use yii\base\Model;
 use Yii;
 use frontend\widgets\newList\NewList;
     class News extends Model{
         public static function getNewsList($max){
             return Yii::$app->db->createCommand('SELECT * FROM news LIMIT '.$max)->queryAll();
         }
         public static function getItem($id)
         {
             return Yii::$app->db->createCommand("SELECT * FROM news WHERE id = $id")->queryOne();
         }
     }