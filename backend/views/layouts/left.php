<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/user-male-icon.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Головна', 'icon' => 'home', 'url' => ['site/index']],
                    ['label' => 'Новини' , 'icon' => 'newspaper-o', 'url' => ['news/index']],
                    ['label' => 'Категорії', 'icon' => 'user', 'url' => ['aboutme/update?id=1']],
                    ['label' => 'Теги', 'icon' => 'briefcase', 'url' => ['experience/index']],
                    ['label' => 'Спортсмени', 'icon' => 'list', 'url' => ['skills/index']],
                    ['label' => 'Коментарі', 'icon' => 'code-fork', 'url' => ['repositories/index']],
                    ['label' => 'Фото галерея', 'icon' => 'edit', 'url' => ['site/write-a-letter']],
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                ],
            ]
        ) ?>

    </section>

</aside>
