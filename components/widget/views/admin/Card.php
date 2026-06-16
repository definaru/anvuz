<?php
namespace frontend\components\widget\views\admin;

class Card extends \yii\base\Widget
{
    public int $count = 0;
    public string $title;
    public string $href;
    public string $icon;

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('card', [
            'icon' => $this->icon ?? '',
            'title' => $this->title,
            'href' => $this->href ?? '',
            'count' => $this->count,
            'content' => $content
        ]);
    }
}