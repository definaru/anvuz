<?php
namespace frontend\data\text;

use Yii;
use yii\helpers\Html;


class Hello
{
    // use frontend\data\text\Hello;
    // Hello::user()
    public static function text()
    {
        $hourAssign = date("H");
        if (($hourAssign >= 0) && ($hourAssign < 5)) {
            $say = "Доброй ночи";
        } elseif (($hourAssign >= 10) && ($hourAssign < 18 ) ) {
            $say = "Добрый день";
        } elseif (($hourAssign >= 18 ) && ($hourAssign < 24)) {
            $say = "Добрый вечер";
        } else {$say = "Доброе утро";}
        return $say;
    }


    public static function user()
    {
        $name = Yii::$app->user->identity->profile;
        if(empty($name)) {
            $text = self::text();
        } else {
            $text = self::text().', '.$name->firstname;
        }
        return Html::tag('h1', $text);
    }

}