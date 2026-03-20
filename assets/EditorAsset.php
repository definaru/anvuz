<?php

namespace frontend\assets;

use yii\web\AssetBundle;


class EditorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ui-admin/editor/css/toastui-editor.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $js = [
        'ui-admin/editor/js/toastui-editor-all.min.js',
        'https://uicdn.toast.com/editor/latest/i18n/ru-ru.js'
    ];  
}