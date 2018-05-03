<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Athletes */

$this->title = Yii::t('app', 'Create Athletes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Athletes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="athletes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
