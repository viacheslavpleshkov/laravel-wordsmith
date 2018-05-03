<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rules */

$this->title = Yii::t('app', 'Create Rules');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
