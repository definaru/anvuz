<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'ui-admin/css/theme.min.css',
    ];

    public $js = [
        'ui-admin/js/bootstrap.bundle.min.js',
        'ui-admin/js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}