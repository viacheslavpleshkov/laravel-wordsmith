<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Athletes */

$this->title = Yii::t('app', 'Update Athletes: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Athletes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="athletes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
