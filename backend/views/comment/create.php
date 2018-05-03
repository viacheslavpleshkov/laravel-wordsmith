<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Comment */

$this->title = Yii::t('app', 'Створити Коментар');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Коментарі'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
