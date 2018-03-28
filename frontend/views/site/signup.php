<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Реєстрація';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

    <p>Будь ласка, заповніть наступні поля для реєстрації:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Ім\'я користувача') ?>

                <?= $form->field($model, 'email')->label('Email') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                <div class="form-group">
                    <?= Html::submitButton('Реєстрація', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
