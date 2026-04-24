<?php
namespace frontend\components\widget;

use yii\web\View;
use yii\base\Widget;
use frontend\assets\SwiperAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;


class Swiper extends Widget
{
    public $options = [];
    public $clientOptions = [];

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $id = $this->options['id'];
        $arrow = $this->options['arrow'] ?? false;
        $scrollbar = $this->options['scrollbar'] ?? false;
        $pagination = $this->options['pagination'] ?? false;
        $content = ob_get_clean();
        $this->registerClientScript($id);
        return $this->render('item', [
            'content' => $content, 
            'id' => $id, 
            'arrow' => $arrow,
            'scrollbar' => $scrollbar,
            'pagination' => $pagination
        ]);
    }

    public function registerClientScript($id)
    {
        SwiperAsset::register($this->view);
        $this->clientOptions = ArrayHelper::merge(
            $this->clientOptions, []
        );
        $init = '".'.$id.'"';
        $clientOptions = Json::encode($this->clientOptions);
        $js = <<<JS
        new Swiper($init, $clientOptions);
        JS;
        $this->view->registerCss('
            .swiper-pagination-bullet-active {
                --swiper-theme-color: #411fab;
            }
            .swiper-pagination-bullets {
                --swiper-pagination-bottom: 0px;
            }
        ');
        $this->view->registerJs($js, View::POS_END);
    }
}