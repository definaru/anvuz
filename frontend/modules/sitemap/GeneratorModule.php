<?php
namespace frontend\modules\sitemap;

class GeneratorModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\sitemap\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'map';
    }
}