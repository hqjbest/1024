<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\UserAction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-action-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'adept_id')->textInput() ?>

    <?= $form->field($model, 'first_time')->textInput() ?>

    <?= $form->field($model, 'last_time')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-user-join_time has-success">
        <label class="control-label col-sm-3" for="user-join_time"></label>
        <div class="col-sm-6">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
