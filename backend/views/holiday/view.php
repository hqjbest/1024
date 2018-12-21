<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\Holiday */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '节日管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="holiday-view">

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
            [
                'attribute' => 'first_time',
                'value' => date("Y-m-d", strtotime($model->first_time))
            ],
            [
                'attribute' => 'last_time',
                'value' => date("Y-m-d", strtotime($model->last_time))
            ],
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
