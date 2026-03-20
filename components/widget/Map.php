<?php
namespace frontend\components\widget;
use yii\base\Widget;

class Map extends Widget
{
    public $title;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('map', ['title' => $this->title]);
    }

}