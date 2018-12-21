<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\Adept */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '部门管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adept-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'toptime',
            'undertime',
            'description',
            [
                'attribute' => 'updated_at',
                'value' => date("Y-m-d H:i:s", $model->updated_at)
            ],
            [
                'attribute' => 'created_at',
                'value' => date("Y-m-d H:i:s", $model->created_at)
            ],
        ],
    ]) ?>

</div>
