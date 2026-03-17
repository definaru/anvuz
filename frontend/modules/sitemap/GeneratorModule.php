<?php
namespace frontend\modules\sitemap;

// https://github.com/katech91/yii2-sitemap-module
// https://www.sitemaps.org/protocol.html
// https://elisdn.ru/blog/38/sitemap-for-yii-project

class GeneratorModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\sitemap\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'map';
    }
}