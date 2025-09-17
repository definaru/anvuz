<?php

namespace frontend\modules\error;


class ErrorModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\error\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'page';
    }
}