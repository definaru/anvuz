<?php
namespace frontend\data\contact;
use yii\helpers\Url;

class Blocks
{
    public static function list()
    {
        $canonical = Url::to('contact', true);
        $title = 'Контакты | АНВУЗ России';
        $description = 'Ассоциация частных образовательных организаций высшего образования и профессиональных образовательных организаций России.';
        $image = '';
        return [
            'seo' => [
                'canonical' => $canonical,
                'title' => $title,
                'description' => $description,
                'image' => $image,
                'meta' => [
                    ['name' => 'keywords', 'content' => 'ВУЗ'],
                    ['name' => 'name', 'content' => $title],
                    ['name' => 'description', 'content' => $description],
                    ['name' => 'image', 'content' => $image],
                    ['property' => 'og:type', 'content' => 'website'],
                    ['property' => 'og:site_name', 'content' => 'Ассоциация'],
                    ['property' => 'og:locale', 'content' => 'ru_RU'],
                    ['property' => 'og:title', 'content' => $title],
                    ['property' => 'og:url', 'content' => $canonical],
                    ['property' => 'og:description', 'content' => $description],
                    ['property' => 'og:image', 'content' => $image],
                    ['name' => 'twitter:card', 'content' => 'summary_large_image'],
                    ['name' => 'twitter:title', 'content' => $title],
                    ['name' => 'twitter:description', 'content' => $description],
                    ['name' => 'twitter:image', 'content' => $image]
                ]
            ],
            'blocks' => ['hero', 'participants', 'details', 'map'], //, 'form'
            'content' => [
                'participants' => [
                    [
                        'photo' => '/site/image/Ovp8Iq9YLYD2riIvdzo66P9fHkXkwQ.png',
                        'name' => 'Сподах Григорий Григорьевич',
                        'position' => 'Исполнительный <strong>директор АНВУЗ России</strong>, кандидат экономических наук, доцент',
                        'address' => '',
                        'phone' => '84959250380',
                        'email' => 'spodakh@anvuz.ru'
                    ],
                    [
                        'photo' => '/site/image/Кругликова.jpg',
                        'name' => 'Кругликова Ольга Викторовна',
                        'position' => 'Главный бухгалтер АНВУЗ России',
                        'address' => '',
                        'phone' => '84959250380',
                        'email' => 'kruglikova@anvuz.ru'
                    ]
                ]
            ],
            'files' => []
        ];
    }
}