<?php

namespace frontend\components\blocks\ui;

use Yii;
use yii\helpers\Html;


class Profile
{

    public static function initials()
    {
        $init = Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->profile;
        if($init === '') return;
        return mb_substr($init->lastname, 0, 1) . mb_substr($init->firstname, 0, 1);
    }


    public static function wrapper()
    {
        $content = Yii::$app->controller->renderPartial('/admin/_item');
        return Html::tag('ul', $content, ['class' => 'dropdown-menu p-2 border-0 shadow']);
    }


    public static function avatar()
    {
        $init = Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->profile;
        //$init->avatar : self::initials();
        $image = 'https://htmlstream.com/preview/front-dashboard-v2.1.1/assets/img/160x160/img6.jpg';
        $avatar = Html::img($image, [
            'style' => 'width:40px',
            'class' => 'rounded-circle',
            'alt' => self::initials(),
        ]);
        $blank = Html::tag(
            'div', 
            self::initials(), 
            [
                'style' => 'width:40px;height:40px', 
                'class' => 'bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center'
            ]
        );
        return isset($init->image) ? $avatar : $blank;
    }


    public static function button()
    {
        $avatar = self::avatar();
        return Html::button($avatar, [
            'class' => 'btn btn-light p-0 rounded-circle',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => false
        ]);
    }


    public static function dropdown()
    {
        $content = self::button().self::wrapper();
        return Html::tag('div', $content, ['class' => 'dropdown']);
    }

}