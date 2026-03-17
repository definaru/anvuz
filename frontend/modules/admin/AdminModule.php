<?php

namespace frontend\modules\admin;


class AdminModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\admin\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'admin';
    }
}