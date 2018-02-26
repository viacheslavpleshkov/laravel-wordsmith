<?php
use yii\helpers\Url;
use yii\helpers\Html;
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= Html::encode($this->title) ?></h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo Url::to('site/index')?>">Головна</a></li>
        <li class="breadcrumb-item"><a href="<?php echo  Url::to('news/index')?>">Новини</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $item['title']; ?></li>
    </ol>
</nav>
<h1><?php echo $item['title']; ?></h1>
<p><?php echo $item['content']; ?></p>

<a href="<?php echo Url::to(['news/index']); ?>" class="btn btn-info">Назад</a>