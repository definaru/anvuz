<?php

namespace frontend\modules\cabinet;


class CabinetModule extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\cabinet\controllers';

    public function init()
    {
        parent::init();
        $this->layout = 'panel';
    }
}