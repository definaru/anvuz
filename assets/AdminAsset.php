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
        'app/js/vue.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];

    public function init()
    {
        if (\Yii::$app->controller->action->id === 'create') {
            //$this->css[] = '';
            $this->js[] = 'ui-admin/js/create_news.js';
        }
        if (\Yii::$app->controller->action->id === 'update') {
            $this->js[] = 'ui-admin/js/update_news.js';
        }
    }
}