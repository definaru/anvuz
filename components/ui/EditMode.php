<?php
namespace frontend\components\ui;

use Yii;
use yii\helpers\Html;

// use frontend\components\ui\EditMode;
class EditMode
{
    public static function button(string $link, string $tag = 'p', string $label = 'редактировать')
    {
        $role = Yii::$app->user->can('admin');
        $href = Html::a(
            $label, 
            $link, 
            [
                'target' => '_blank',
                'rel' => 'noopener noreferrer'
            ]
        );
        if ($role) {
            return Html::tag($tag, $href);
        }
    }

}