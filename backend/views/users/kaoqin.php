<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '考勤';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index box box-primary">
    <div class="box-header with-border">

    </div>
    <form class="form-horizontal" action="/advertiser-v2" method="get">
        <div class="box-body">
            <div class="form-group search-box">
                <label class="col-sm-5" style="padding-top: 7px; width: 22%"></label>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-info btn-lg">上班打卡</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-default btn-lg">下班打卡</button>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer -->
    </form>
</div>
