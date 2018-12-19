<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\mysql\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">


    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('新增', ['delete', 'id' => $model->id], [
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
            'username',
            [
                'attribute' => 'adept_id',
                'value' => \common\models\mysql\Adept::findOne($model->adept_id)->name
            ],
            'sex',
            'number',
            'email:email',
            'phone',
            [
                'attribute' => 'join_time',
                'value' => date("Y-m-d H:i:s", $model->join_time)
            ],
            [
                'attribute' => 'created_at',
                'value' => date("Y-m-d H:i:s", $model->created_at)
            ],
            [
                'attribute' => 'created_at',
                'value' => date("Y-m-d H:i:s", $model->created_at)
            ],
        ],
    ]) ?>

</div>
