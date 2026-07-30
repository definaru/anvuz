<?php
namespace frontend\components\toastr;

use yii\web\View;
use yii\base\Widget;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use frontend\assets\ToastrAsset;

// https://github.com/CodeSeven/toastr
class Toastr extends Widget
{

    public $clientOptions = '';

    public function init()
    {
        $this->registerClientScript();
        parent::init();
    }

    public function run()
    {
        return $this->render('toastr');
    }

    public function registerClientScript()
    {
        ToastrAsset::register($this->view);
        $this->clientOptions = ArrayHelper::merge(
            $this->clientOptions, []
        );
        $clientOptions = Json::encode($this->clientOptions);
        $this->view->registerJs("toastr.options = $clientOptions", View::POS_END);
    }

}