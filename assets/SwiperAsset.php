<?php

namespace frontend\assets;

use yii\web\AssetBundle;


class SwiperAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = ['site/swiper/css/swiper-bundle.min.css'];
    public $js = ['site/swiper/js/swiper-bundle.min.js'];  
}