<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\mysql\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'adept_id')->widget(\kartik\widgets\Select2::classname(),
        [
            'data' => array_column(\common\models\mysql\Adept::find()->all(), 'name', 'id'),
            'language' => 'zh-CN',
            'options' => ['multiple' => false],
        ])
    ?>
    <?= $form->field($model, 'sex')->radioList(['男' => '男', '女' => '女']) ?>
    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'join_time')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-user-join_time has-success">
        <label class="control-label col-sm-3" for="user-join_time"></label>
        <div class="col-sm-6">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>
</div>
