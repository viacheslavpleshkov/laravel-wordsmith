<?php
/* @var $this yii\web\View */
$this->title = Yii::t('app','Головна');
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?=Yii::t('app','Вітаю').', '.Yii::$app->user->identity->username?></h1>
        <p><i class="fa fa-arrow-down" aria-hidden="true"></i><?=Yii::t('app','Версії')?><i class="fa fa-arrow-down" aria-hidden="true"></i></p>
        <img src="https://img.shields.io/badge/WebServer-<?=$_SERVER['SERVER_SOFTWARE']; ?>-4a6978.svg?style=flat-square" alt="">
        <img src="https://img.shields.io/badge/Yii-<?=Yii::getVersion(); ?>-red.svg?style=flat-square" alt="">
        <img src="https://img.shields.io/badge/PHP-<?=phpversion();?>-8892BF.svg?style=flat-square" alt="">
        <p></p>
        <p><?=Html::a(Yii::t('app','Перейти на сайт ').' <i class="fa fa-arrow-right" aria-hidden="true"></i>', Yii::getAlias('@site'), ['class'=>'btn btn-lg btn-success'])?></p>
    </div>

    <div class="body-content">

    </div>
</div>
