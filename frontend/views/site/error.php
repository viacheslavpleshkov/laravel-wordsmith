<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Вище виникла помилка під час обробки Вашого запиту веб-сервером.
    </p>
    <p>
        Будь ласка, зв'яжіться з нами, якщо ви вважаєте, що це помилка сервера. Дякую.
    </p>

</div>
