<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\Adept */

$this->title = '更新: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '部门管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adept-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
