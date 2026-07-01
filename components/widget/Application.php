<?php
namespace frontend\components\widget;

class Application extends \yii\base\Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('application');
    }

}