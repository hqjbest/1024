<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HolidaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '节日管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="holiday-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute' => 'first_time',
                'value' => function ($model){
                    return date("Y-m-d", strtotime($model->first_time));
                }
            ],
            [
                'attribute' => 'last_time',
                'value' => function ($model){
                    return date("Y-m-d", strtotime($model->last_time));
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model){
                    return date("Y-m-d H:i:s", $model->updated_at);
                }
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
