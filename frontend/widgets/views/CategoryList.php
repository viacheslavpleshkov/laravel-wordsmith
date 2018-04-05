<?php
use yii\helpers\Url;
?>
<div class="card-body">
    <div class="row">
        <?php foreach ($categorylist as $item): ?>
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="<?=Url::to(['category/view', 'url' => $item->url]); ?>"><?=$item->title; ?></a>
                </li>
            </ul>
        </div>
        <?php endforeach;?>
    </div>
</div>