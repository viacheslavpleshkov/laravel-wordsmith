<?php

/* @var $this yii\web\View */
/* @var $news array|\frontend\models\News[]|\yii\db\ActiveRecord[] */
/* @var $pagination \yii\data\Pagination */

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\widgets\Search;

$this->title = 'Пошук';
?>
<?php if (count($news)>0):?>
<?php foreach ($news as $item):?>
        <div class="card mb-4">
            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22780%22%20height%3D%22270%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20780%20270%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16228d50f20%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16228d50f20%22%3E%3Crect%20width%3D%22780%22%20height%3D%22270%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22290.2421875%22%20y%3D%22152.4%22%3E780x270%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
            <div class="card-body">
                <h2 class="card-title"><?=$item->title ?></h2>
                <p class="card-text"><?=$item->description ?></p>
                <?=Html::a('Детальніше <i class="fas fa-arrow-right"></i>', Url::to(['news/view', 'url' => $item->url]),['class'=>'btn btn-danger'])?>
            </div>
            <div class="card-footer text-muted">
                Автор: <?=$item->user->username?>
                Категорія: <a href="<?=Url::to(['category/view', 'id' => $item->category->id]); ?>"><?=$item->category->title; ?></a>
                Опубликовано: <?=$item->date ?>
                Перегляди: <?=$item->views ?>
            </div>
        </div>
<?php endforeach; ?>
<div class="text-center">
    <?php echo LinkPager::widget([
        'pagination' => $pagination,
    ]); ?>
</div>
<?php else:
    echo 'Вибачте, але нічого не знайдено. Спробуйте ще раз, напишіть запит по-іншому.';
    echo Search::widget();
 endif;?>