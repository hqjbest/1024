<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\mysql\Adept */

$this->title = '新增';
$this->params['breadcrumbs'][] = ['label' => '部门管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adept-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
