<?php
namespace frontend\components\widget;
use yii\base\Widget;


class Card extends Widget
{
    public $title;
    public $action;
    public $subtitle;
    public $icon;
    public $href = '';
    public $document = '';
    public $padding = 'p-0';
    public $tag = 'h5';
    public $ratio = 'ratio-1x1';
    public $position = '';


    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('card', [
            'title' => $this->title,
            'action' => $this->action,
            'subtitle' => $this->subtitle,
            'content' => $content,
            'icon' => $this->icon,
            'href' => $this->href,
            'document' => $this->document,
            'padding' => $this->padding,
            'tag' => $this->tag,
            'ratio' => $this->ratio,
            'position' => $this->position
        ]);
    }
}