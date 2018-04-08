<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Новини';
?>
<?php foreach ($news as $item): ?>
    <div class="card mb-4">
        <img class="card-img-top" src="<? echo Yii::getAlias('@images-news').'/';  echo $item->images?>">
        <div class="card-body">
            <h2 class="card-title"><?=$item->title ?></h2>
            <p class="card-text"><?=$item->description ?></p>
            <?=Html::a('Детальніше <i class="fas fa-arrow-right"></i>', Url::to(['news/view', 'url' => $item->url]),['class'=>'btn btn-danger'])?>
        </div>
        <div class="card-footer text-muted">
            Автор: <?=$item->user->username?>
            Категорія: <a href="<?=Url::to(['category/view', 'id' => $item->category->id]); ?>"><?=$item->category->title; ?></a>
            Опубликовано: <?=Yii::$app->formatter->asDate("$item->date"); ?>
            Перегляди: <?=$item->views ?>
        </div>
    </div>
<?php endforeach; ?>
<div class="text-center">
<?php echo LinkPager::widget([
    'pagination' => $pagination,
]); ?>
</div>
