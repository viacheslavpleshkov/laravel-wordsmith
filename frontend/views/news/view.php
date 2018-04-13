<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = $news->title;

?>
    <p class="lead">Автор: <a href="#"><?=$news->user->username ?></a>
    </p>
    <hr>
    <p>Опубликовано: <?=Yii::$app->formatter->asDate("$news->date"); ?></p>

    <hr>
    <img class="img-fluid rounded" src="<? echo Yii::getAlias('@images-news').'/';  echo $news->images?>">
    <hr>
    <p><?=$news->content ?></p>
    <hr>
     Категорія: <a href="<?=Url::to(['category/view', 'id' => $news->category->id]); ?>"><?=$news->category->title; ?></a>
<hr>
<a href="<?=Url::to(['news/index']); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i>Назад</a>
<hr>
<?php if (!Yii::$app->user->isGuest):?>
<!-- Comments Form -->
    <div class="card my-4">
        <h5 class="card-header">Залишити коментар:</h5>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Відправити</button>
            </form>
        </div>
    </div>
<?php else:?>
<div class="alert alert-danger text-center" role="alert">
<p>Вибачте але ви не можете залити коментар тому що ви не зарегестровані, аба не вішли на сайт</p></div>
<?php endif;?>
<?php if(!empty($comments)):?>

    <?php foreach($comments as $iteam):?>
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0"><?= $iteam->user->username; ?></h5>
                Дата публікації коментаря: <?=Yii::$app->formatter->asDatetime("$iteam->datetime") ?>
                <p><?= $iteam->text; ?></p>
<!--                <p>Дата публікації коментаря: --><?//= $iteam->datetime; ?><!--</p>-->
            </div>
        </div>
    <?php endforeach;?>

<?php endif;?>