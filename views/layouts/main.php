<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?=Url::to(['news/index'])?>"><img src="http://www.pikanakondy.com.ua/wp-content/uploads/2014/08/Flag.jpg"  alt="<?=Yii::$app->name?>" width="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['news/index'])?>"><i class="fas fa-newspaper"></i>Новини</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-align-center"></i>Про нас</a>
                    <div class="dropdown-menu">
                        <?= Html::a('Про нас', ['site/about'], ['class'=>'dropdown-item']) ?>
                        <?= Html::a('Правила клубу', ['site/rules'], ['class'=>'dropdown-item']) ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/photo-gallery'])?>"><i class="fas fa-users"></i>Спорцмени</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/photo-gallery'])?>"><i class="fas fa-images"></i>Фото шалерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/contacts'])?>"><i class="fas fa-envelope"></i>Написати нам</a>
                </li>
                <?php if (Yii::$app->user->identity->username=='')
                { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>Профіль</a>
                        <div class="dropdown-menu">
                            <?= Html::a('Вхід', ['site/login'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Реєстрація', ['site/action'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Нагадати пароль', ['site/action'], ['class'=>'dropdown-item']) ?>
                        </div>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i><?=Yii::$app->user->identity->username?></a>
                        <div class="dropdown-menu">
                            <?= Html::a('Профіль', ['demo/action'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Налаштування', ['demo/action'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Вихід', ['demo/action'], ['class'=>'dropdown-item']) ?>

                        </div>
                    </li>
                    <?php
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-language"></i>Мова сайту</a>
                    <div class="dropdown-menu">
                        <?= Html::a('Українська (UK)', ['news/index', 'language' => 'uk-UA'], ['class'=>'dropdown-item']) ?>
                        <?= Html::a('Російська (RU)', ['news/index', 'language' => 'ru-RU'], ['class'=>'dropdown-item']) ?>
                        <?= Html::a('Англійська (EN)', ['news/index', 'language' => 'en-US'], ['class'=>'dropdown-item']) ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="my-4"><?=$this->title?></h1>
            <?= $content ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-search"></i>Пошук</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Шукати...">
                        <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">Пошук</button>
                </span>
                    </div>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="fas fa-list-ul"></i>Категорії</h5>
                <?=\app\widgets\CategoryList::widget()?>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-calendar-alt"></i>Календарь</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Пік Анаконди ©2013-<?=date('Y')?>. Всі права захищені.</p>
    </div>
</footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
