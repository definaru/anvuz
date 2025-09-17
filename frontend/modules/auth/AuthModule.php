<?php

namespace frontend\modules\auth;


class AuthModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\auth\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'auth';
        \Yii::configure($this, require __DIR__ . '/config.php');
    }
}