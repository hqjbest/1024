<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\mysql\Holiday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="holiday-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_time')->textInput() ?>

    <?= $form->field($model, 'last_time')->textInput() ?>

    <div class="form-group field-user-join_time has-success">
        <label class="control-label col-sm-3" for="user-join_time"></label>
        <div class="col-sm-6">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
