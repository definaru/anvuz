<?php
namespace frontend\data;

use Yii;
use yii\helpers\Html;
use frontend\components\icons\Icons;


class FooterData
{
    public static function menu()
    {
        return [
            [
                'image' => true,
                'header' => Icons::logotype(),
                'list' => [
                    [
                        'type' => 'tel',
                        'text' => env('TELEPHONE'),
                        'link' => env('TELEPHONE'),
                        'icon' => Icons::phone(20, '#ab95d1', 1.5)
                    ],
                    [
                        'type' => 'mailto',
                        'text' => env('ADMIN_EMAIL'),
                        'link' => env('ADMIN_EMAIL'),
                        'icon' => Icons::mail(20, '#ab95d1', 1.5)
                    ],
                    [
                        'type' => 'address',
                        'text' => Yii::t('app', 'address_moscow'),
                        'link' => '55.762581,37.682458',
                        'icon' => Icons::mapPin(20, '#ab95d1', 1.5)
                    ],
                ]
            ],
            // [
            //     'image' => false,
            //     'header' => 'Сотрудничество',
            //     'list' => [
            //         [
            //             'type' => 'a',
            //             'text' => 'Университеты',
            //             'link' => '/university',
            //             'icon' => ''
            //         ],
            //         [
            //             'type' => 'a',
            //             'text' => 'Исследователям',
            //             'link' => '/researchers',
            //             'icon' => ''
            //         ],
            //         [
            //             'type' => 'a',
            //             'text' => 'Партнёрам',
            //             'link' => '/partners',
            //             'icon' => ''
            //         ],
            //     ]
            // ],
            [
                'image' => false,
                'header' => Yii::t('app', 'information'),
                'list' => [
                    [
                        'type' => 'a',
                        'text' => Yii::t('app', 'about_us'),
                        'link' => '/about',
                        'icon' => ''
                    ],
                                        [
                        'type' => 'a',
                        'text' => Yii::t('app', 'documents'),
                        'link' => '/documents',
                        'icon' => ''
                    ],
                    // [
                    //     'type' => 'a',
                    //     'text' => 'Проекты',
                    //     'link' => '/projects',
                    //     'icon' => ''
                    // ],
                    [
                        'type' => 'a',
                        'text' => Yii::t('app', 'directorate'),
                        'link' => '/management',
                        'icon' => ''
                    ]
                ]
            ],
            [
                'image' => false,
                'header' => Yii::t('app', 'resources'),
                'list' => [
                    [
                        'type' => 'a',
                        'text' => Yii::t('app', 'news'),
                        'link' => '/news',
                        'icon' => ''
                    ],
                    // [
                    //     'type' => 'a',
                    //     'text' => 'Вступить в ассоциацию',
                    //     'link' => '/auth/signup',
                    //     'icon' => ''
                    // ],
                    [
                        'type' => 'a',
                        'text' => Yii::t('app', 'science'),
                        'link' => '/science',
                        'icon' => ''
                    ]
                ]
            ],
        ];
    }

    public static function isImage($item, $header)
    {
        return $item === true ? 
            Html::a($header, '/', ['class' => 'my-4 d-block text-primary']) : 
            Html::tag('h5', $header, ['class' => 'my-4 d-block text-dark fw-bold']);
    }
}