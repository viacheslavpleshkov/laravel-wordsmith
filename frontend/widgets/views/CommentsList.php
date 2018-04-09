<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="card-group">
        <div class="card-body">
            <?php foreach ($CommentsWidgetList as $item):?>
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50">
                <div class="media-body">
                    <h5 class="mt-0"><?=$item->user->username?></h5>
                    <?=$item->text?>
                    <br>
                    <?=Html::a('Перейти до новини <i class="fas fa-arrow-right"></i>', Url::to(['news/view', 'url' => $item->news->url]),['class'=>'btn btn-danger'])?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
</div>

