<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\Adept */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adept-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toptime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'undertime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <div class="form-group field-user-join_time has-success">
        <label class="control-label col-sm-3" for="user-join_time"></label>
        <div class="col-sm-6">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
