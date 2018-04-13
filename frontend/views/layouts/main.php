<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use frontend\widgets\CategoryList;
use frontend\widgets\Search;
use frontend\widgets\CommentsList;
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
        <a class="navbar-brand" href="<?=Url::to(['news/index'])?>"><img src="/<?=Yii::getAlias('@logo');?>"  alt="<?=Yii::$app->name?>" width="85px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['news/index'])?>"><i class="fas fa-newspaper"></i>Новини</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/about'])?>"><i class="fas fa-bars"></i></i>Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/rules'])?>"><i class="fas fa-lock"></i>Правила клубу</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/athletes'])?>"><i class="fas fa-users"></i>Cпортсмени</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/photo-gallery'])?>"><i class="fas fa-images"></i>Фото галерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Url::to(['site/contact'])?>"><i class="fas fa-envelope"></i>Написати нам</a>
                </li>
                <?php if (Yii::$app->user->isGuest):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>Профіль</a>
                        <div class="dropdown-menu">
                            <?= Html::a('Вхід', ['site/login'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Реєстрація', ['site/signup'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Нагадати пароль', ['site/request-password-reset'], ['class'=>'dropdown-item']) ?>
                        </div>
                    </li>
                    <?php else:?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i><?=Yii::$app->user->identity->username?></a>
                        <div class="dropdown-menu">
                            <?= Html::a('Профіль', ['account/profile'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a('Налаштування', ['account/settings'], ['class'=>'dropdown-item']) ?>
                            <?= Html::a("Выход", ['/site/logout'], ['data' => ['method' => 'post'], 'class' => 'dropdown-item']);?>
                        </div>
                    </li>
                    <?php endif;?>
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
                <?=Search::widget()?>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="fas fa-list-ul"></i>Категорії</h5>
                <?=CategoryList::widget()?>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-comment"></i>Останні коментарі</h5>
                <?=CommentsList::widget()?>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-bullhorn"></i>Наш прапор</h5>
                <div class="card-body text-center">
                    <img src="/<?=Yii::getAlias('@images-logo'); ?>" width="100%">
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-newspaper"></i>Новини від адміністраторів сайту</h5>
                <div class="card-body">
                    Якщо ви побачили якусь помилку сайту просимо повідомити нас на електрону почту <?=Yii::$app->formatter->asEmail('admin@pikanakondy.com.ua');?>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-medkit"></i>При підтримці</h5>
                <div class="card-body text-center">
                    <a href="http://www.fstu.com.ua/"><img src="/images/fstu.jpg" width="100%" target="_blank" ></a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Пік Анаконди ©2013-<?=date('Y')?>. Всі права захищені.</p>
        <p class="m-0 text-center text-white">Сайт створив <a href="https://slavapleshkov.com/uk" target="_blank">Слава Плешков</a></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
