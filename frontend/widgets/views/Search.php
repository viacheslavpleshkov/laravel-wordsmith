<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\typeahead\Typeahead;
?>
<?php $form = ActiveForm::begin() ?>
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
            <button class="btn btn-danger" type="button">Пошук</button>
        </span>
    </div>
</div>
<?php ActiveForm::end() ?>
