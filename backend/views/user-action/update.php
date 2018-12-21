<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\UserAction */

$this->title = 'Update User Action: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-action-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
