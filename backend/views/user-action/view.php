<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\UserAction */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-action-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'user_id',
            'date',
            'adept_id',
            'first_time:datetime',
            'last_time:datetime',
            'status',
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
