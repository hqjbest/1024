<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\Worktime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worktime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'adept_id')->textInput() ?>

    <?= $form->field($model, 'top_time')->textInput() ?>

    <?= $form->field($model, 'undertime')->textInput() ?>

    <?= $form->field($model, ' created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
