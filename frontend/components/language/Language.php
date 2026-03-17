<?php
namespace frontend\components\language;

use Yii;
use yii\bootstrap5\Html;
use frontend\components\icons\Icons;


class Language
{

    public static function getLanguage($lang)
    {
        return strtr($lang, [
            'ru' => 'Русский',
            'en' => 'English',
            'zh' => '中文' 
        ]);
    }


    public static function list()
    {
        //Icons::dot();
        $list = '';
        foreach(Yii::$app->params['languages'] as $item) {
            $options = ['class' => 'dropdown-item rounded'];
            if ($item === Yii::$app->language) {
                Html::addCssClass($options, ['active']);
            }
            $list .= Html::tag('li', 
                Html::a(
                    self::getLanguage($item), 
                    ['language/change', 'language' => $item], 
                    ['class' => $options]
                )
            );
        }
        return Html::tag('ul', $list, ['class' => 'dropdown-menu px-2']);
    }


    public static function switcher()
    {
        $image = Icons::translate();
        $text = Html::tag('span', 'Language selection', ['class' => 'd-md-none d-inline-block ms-2 ms-md-0']);
        $bl = Html::tag(
            'div', 
            $image.$text, 
            [
                'class' => 'btn', 
                ':class' => "[theme ? 'btn-light' : 'btn-dark']",
                'type'=> 'button', 
                'data-bs-toggle' => 'dropdown', 
                'aria-label' => 'Выбор языка',
                'aria-expanded' => false
            ]
        );
        $list = self::list();
        return Html::tag('div', $bl.$list, ['class' => 'dropdown']);
    }

}