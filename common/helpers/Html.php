<?php
namespace common\helpers;

use yii\helpers\BaseHtml;


class Html extends BaseHtml
{

    public static function tel($text, $number = null, $options = [])
    {
        //preg_replace('/\s+/', '', $number)
        $options['href'] = 'tel:' . ($number === null ? $text : $number);
        return static::tag('a', $text, $options);
    }


    public static function address($text, $address = null, $options = [])
    {
        $options['href'] = 'https://yandex.ru/maps/?rtext=~' . ($address === null ? $text : urlencode($address));
        $options['target'] = '_blank';
        $options['rel'] = 'noopener noreferrer nofollow';
        return static::tag('a', $text, $options);
    }

}
