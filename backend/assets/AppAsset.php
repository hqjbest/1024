<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'js/daterangepicker/daterangepicker.css'
    ];
    public $js = [
        /*'js/daterangepicker/moment.min.js',
        'js/daterangepicker/daterangepicker.js',
        'js/daterangepicker/bootstrap-datetimepicker.js',
        'js/daterangepicker/bootstrap-datetimepicker.zh-CN.js',*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'kartik\date\DatePickerAsset'
    ];
}
