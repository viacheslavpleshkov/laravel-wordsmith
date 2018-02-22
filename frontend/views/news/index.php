<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Новини';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo Yii::$app->urlManager->createUrl('site/index')?>">Головна</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->title?></li>
        </ol>
    </nav>
    <div class="card-group">
    <?php foreach ($news as $item): ?>
    <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22366%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20366%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_161bcc75dfe%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_161bcc75dfe%22%3E%3Crect%20width%3D%22366%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.9609375%22%20y%3D%2297.95%22%3E366x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item['title']; ?></h5>
                    <p class="card-text"><?php echo $item['content']; ?></p>
                    <a href="news/<?php echo $item['id']; ?>" class="btn btn-secondary">Детальніше</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Дата публикації <?php echo $item['date']; ?> Автор: <?php echo $item['user']; ?></small>
                </div>
            </div>
    </div>
    <?php endforeach;?>
    </div>

</div>
