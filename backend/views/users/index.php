<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '员工管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'username',
            [
                'attribute' => 'adept_id',
                'format'=>'raw',
                'value' => function($model){
                    $model = \common\models\mysql\Adept::findOne($model->id);
                    return $model->name;
                },
                'filter' => \kartik\select2\Select2::widget([
                    'model'=>$searchModel,
                    'attribute' => 'adept_id',
                    'language' => 'zh-CN',
                    'pluginOptions' => ['dropdownAutoWidth'=>true,'allowClear'=>true,'placeholder'=>'请选择...'],
                    'data' => array_column(\common\models\mysql\Adept::find()->all(), 'name', 'id'),
                ]),
            ],
            [
                'attribute' => 'sex',
                'format'=>'raw',
                'filter' => \kartik\select2\Select2::widget([
                    'model'=>$searchModel,
                    'attribute' => 'sex',
                    'language' => 'zh-CN',
                    'pluginOptions' => ['dropdownAutoWidth'=>true,'allowClear'=>true,'placeholder'=>'请选择...'],
                    'data' => ['男' => '男', '女' => '女'],
                ]),
            ],
            'phone',
            [
                'attribute' => 'join_time',
                'format'=>'raw',
                'value' => function($model){
                    return date("Y-m-d H:s:i", $model->join_time);
                },
            ],
            //'password_hash',
            //'password_reset_token',
            //'number',
            //'email:email',
            //'status',
            //'join_time:datetime',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
