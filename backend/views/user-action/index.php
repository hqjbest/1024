<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserActionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '考勤报表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-action-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'date',
                'options' => ['width' => '100'],
                'value' => function ($model) {
                    return date("Y-m-d", strtotime($model->date));
                }
            ],
            ['attribute' => 'user_id',
                'format' => 'raw',
                'value' => function ($model) {
                    $model = \common\models\mysql\User::findOne($model->user_id);
                    return $model->username;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'user_id',
                    'language' => 'zh-CN',
                    'pluginOptions' => ['dropdownAutoWidth' => true, 'allowClear' => true, 'placeholder' => '请选择员工'],
                    'data' => array_column(\common\models\mysql\User::find()->all(), 'username', 'id'),
                ]),
            ],
            [
                'attribute' => 'adept_id',
                'format' => 'raw',
                'value' => function ($model) {
                    $model = \common\models\mysql\Adept::findOne($model->adept_id);
                    return $model->name;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'adept_id',
                    'language' => 'zh-CN',
                    'pluginOptions' => ['dropdownAutoWidth' => true, 'allowClear' => true, 'placeholder' => '请选择部门'],
                    'data' => array_column(\common\models\mysql\Adept::find()->all(), 'name', 'id'),
                ]),
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'filter' => \kartik\select2\Select2::widget([
                    'model' => $searchModel,
                    'attribute' => 'status',
                    'language' => 'zh-CN',
                    'pluginOptions' => ['dropdownAutoWidth' => true, 'allowClear' => true, 'placeholder' => '请选择状态'],
                    'data' => ['' => '', '正常' => '正常', '加班' => '加班', '迟到' => '迟到', '早退' => '早退', '矿工' => '矿工',],
                ]),
            ],
            'first_time',
            'last_time',
            //'description',
            //'created_at',
            //'updated_at',
        ],
    ]); ?>
</div>
