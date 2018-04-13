<?php

/* @var $CommentsWidgetList array|\frontend\models\Comment[]|\yii\db\ActiveRecord[] */
/* @var $this \yii\web\View */
?>

<div class="card-group">
        <div class="card-body">
            <?php foreach ($CommentsWidgetList as $item):?>
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50">
                <div class="media-body">
                    <h5 class="mt-0"><?=$item->user->username?></h5>
                    <?=$item->text?>
                </div>
            </div>
                <hr>
            <?php endforeach;?>
        </div>
</div>

