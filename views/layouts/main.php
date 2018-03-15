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
        <a class="navbar-brand" href="#">Пік Анаконди</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?=Menu::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => [
                    ['label' => 'Новини',
                        'url' => ['site/index'],
                        'icon'=>'fa fa-home',
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link"><i class="fas fa-newspaper"></i>{label}</a>',
                    ],
                    ['label' => 'Про нас',
                        'url' => ['site/about'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link"><i class="fas fa-align-center"></i>{label}</a>',
                    ],
                    ['label' => 'Правила',
                        'url' => ['site/rules'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link"><i class="fas fa-bullhorn"></i>{label}</a>',
                    ],
                    ['label' => 'Фото шалерея',
                        'url' => ['site/photo-gallery'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link"><i class="fas fa-images"></i>{label}</a>',
                    ],
                    ['label' => 'Написати нам',
                        'url' => ['site/contact'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link"><i class="fas fa-envelope"></i>{label}</a>',
                    ],
                    ['label' => 'Профіль',
                        'url' => ['site/login'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link dropdown-toggle"><i class="fas fa-user"></i>{label}</a>',
                    ],
                    ['label' => 'Мова сайту ('.Yii::$app->language.')',
                        'url' => ['site/language'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link dropdown-toggle"><i class="fas fa-language"></i>{label}</a>',
                    ],
                ],
                'activeCssClass'=>'active',
                'itemOptions'=>['class'=>'nav-item'],
                'submenuTemplate' => "\n<div class='dropdown-menu'>\n{items}\n</div>\n",
            ]);
            ?>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <h1 class="my-4"><?=$this->title?></h1>
            <?= $content ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header"><i class="far fa-search"></i>Пошук</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Шукати...">
                        <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Пошук</button>
                </span>
                    </div>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header"><i class="fas fa-list-ul"></i>Категорії</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
        <p class="m-0 text-center text-white">Слава Плешков ©2016-<?=date('Y')?>. Всі права захищені.</p>
    </div>
</footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
