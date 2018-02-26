<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
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

<div class="wrap">
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="<?php echo Url::to(['site/index'])?>">
                <img src="http://www.pikanakondy.com.ua/wp-content/uploads/2014/08/Flag.jpg" width="100" height="45" alt="" title="<?= Yii::$app->params['siteName']?>">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['site/index'])?>">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['site/about'])?>">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['site/rules'])?>">Правила куба</a>
                </li>                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['site/photo-gallery'])?>">Фото шалерея</a>
                </li>                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['news/index'])?>">Новини</a>
                </li>                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['site/contacts'])?>">Написати нам</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="dropdown">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Акаунт
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo Url::to(['account/login'])?>">Вхід</a>
                        <a class="dropdown-item" href="<?php echo Url::to(['account/signup'])?>">Регистрація</a>
                        <a class="dropdown-item" href="<?php echo Url::to(['account/resetpassword']);?>">Забули пароль</a>
                    </div>
                </div>
                <p>.</p>
                <div class="dropdown">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Мова сайту
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo Url::to(['news/index']); ?>">Укріїнська(UA)</a>
                        <a class="dropdown-item" href="<?php echo Url::to(['news/index']); ?>">Російська(RU)</a>
                    </div>
                </div>
                <p>.</p>
                <input class="form-control mr-sm-2" type="search" placeholder="Пошук" aria-label="Search">
<!--                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Пошук</button>-->
            </form>
        </div>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="card-footer">
    <div class="container">
        <p class="text-center"><?= Yii::$app->params['siteName']?><?= Yii::$app->params['copyright']?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
