<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>
<h3>Останні новини:</h3>
<div class="card-group">
    <?php foreach ($NewsWidgetListTree as $item): ?>
        <div class="card">
            <img class="card-img-top" src="<? echo Yii::getAlias('@images-news').'/';  echo $item->images?>">
            <div class="card-body">
            <h5 class="card-title"><?=$item->title ?></h5>
            <p class="card-text"><?=$item->description ?></p>
            <?=Html::a('Детальніше <i class="fas fa-arrow-right"></i>', Url::to(['news/view', 'url' => $item->url]),['class'=>'btn btn-danger'])?>
        </div>
    </div>
    <?php endforeach;?>
</div>

