<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */

$activeConfig = [
    'options' => ['class'=>'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}<div class=\"col-sm-6\">{input}</div><div class=\"4\">{error}</div>",
        'labelOptions' => ['class' => 'col-sm-2 control-label'],
    ]
];
?>

<div class="row">
    <div class="col-md-10">
        <div class="user-form box box-primary">
            <?php $form = ActiveForm::begin($activeConfig); ?>
            <div class="box-body table-responsive">

                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput() ?>

            </div>
            <div class="box-footer">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
