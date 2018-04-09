<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'Cпортсмени';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="card-columns text-center">
    <?php foreach ($athletes as $item): ?>
        <div class="card ">
            <img class="card-img-top" src="<? echo Yii::getAlias('@images-user-default').'/'; echo $item->images ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?=$item->username ?></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Посада: <?=$item->role ?></li>
                    <li class="list-group-item">Розряд: <?=$item->discharge ?></li>
                    <li class="list-group-item">Судівська категорія: <?=$item->judicial ?></li>
                    <li class="list-group-item">Дата народження: <?=Yii::$app->formatter->asDate("$item->date"); ?></li>
                </ul>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="text-center">
    <?php echo LinkPager::widget([
        'pagination' => $pagination,
    ]); ?>
</div>
