<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\mysql\Holiday */

$this->title = '新增';
$this->params['breadcrumbs'][] = ['label' => '节日管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="holiday-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
