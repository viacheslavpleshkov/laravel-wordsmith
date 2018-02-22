<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Написати нам';
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
        <div class="text-center">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ім'я </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Михайло">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email Адрес</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Телефон (Не обовязково)</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+380998877665">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Тема</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Повідомлення</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Відправити</button>

            </form>

        </div>

</div>
</div>
