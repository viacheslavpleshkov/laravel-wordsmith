<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rules */

$this->title = Yii::t('app', 'Update Rules: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rules-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
