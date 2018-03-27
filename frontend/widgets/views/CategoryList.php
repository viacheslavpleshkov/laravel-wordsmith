<div class="card-body">
    <div class="row">
        <?php foreach ($list as $item): ?>
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="<?=Yii::$app->urlManager->createUrl(['category/view', 'id' => $item['id']]); ?>"><?=$item['title']; ?></a>
                </li>
            </ul>
        </div>
        <?php endforeach;?>
    </div>
</div>