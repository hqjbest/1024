<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="row">
    <div class="col-md-10">
        <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form box box-primary">
            <?= "<?php " ?>$form = ActiveForm::begin(['layout' => 'horizontal']); ?>
            <div class="box-body table-responsive">

        <?php foreach ($generator->getColumnNames() as $attribute) {
            if (in_array($attribute, $safeAttributes)) {
                echo "        <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
            }
        } ?>
            </div>
            <div class="box-footer">
                <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Save') ?>, ['class' => 'btn btn-success btn-block']) ?>
            </div>
            <?= "<?php " ?>ActiveForm::end(); ?>
        </div>
    </div>
</div>
