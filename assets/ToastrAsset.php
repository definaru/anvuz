<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class ToastrAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ui-admin/css/plugins/toastr/toastr.min.css',
    ];
    // public $depends = [
    //     'yii\web\JqueryAsset',
    // ];
    public $js = [
        'ui-admin/js/plugins/toastr/toastr.min.js'
    ]; 
}