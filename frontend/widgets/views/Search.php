<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\typeahead\Typeahead;
?>
<?php $form = ActiveForm::begin(['action' => Url::to(['search/index']),'method' => 'get',]) ?>
<div class="card-body">
    <div class="input-group">
        <?=$form->field($model, 'search')->label(false)->widget(Typeahead::classname(), [
            'options' => ['placeholder' => 'Шукати...'],
            'pluginOptions' => ['highlight'=>true],
            'dataset' => [
                [
                    'local' => $data,
                    'limit' => 15
                ]
            ]
        ]);?>
        <span class="input-group-btn">
            <?= Html::submitButton('Пошук', ['class' => 'btn btn-danger',]) ?>
        </span>
    </div>
</div>
<?php ActiveForm::end() ?>
