<?php
namespace frontend\data\documents;
use yii\helpers\Url;

class Blocks
{
    public static function list()
    {
        $canonical = Url::to('documents', true);
        $title = 'Документы | АНВУЗ России';
        $description = 'Юридическая информация об Ассоциации';
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
            'blocks' => ['hero', 'list'],
            'content' => [
                'lists' => [
                    [
                        'href' => '/document/privacy',
                        'title' => 'Политика обработки персональных данных',
                        'date' => '24.07.2024'
                    ],
                    [
                        'href' => '/document/cookies',
                        'title' => 'Политика cookies',
                        'date' => '24.07.2024'
                    ],
                    [
                        'href' => '/document/agreement',
                        'title' => 'Пользовательское соглашение',
                        'date' => '25.07.2024'
                    ],
                    [
                        'href' => '/document/sending',
                        'title' => 'Согласие на информационную и рекламную рассылку',
                        'date' => '23.07.2024'
                    ],
                    [
                        'href' => '/document/consent_to_the_processing',
                        'title' => 'Согласие на обработку персональных данных',
                        'date' => '23.07.2024'
                    ],
                    [
                        'href' => '/document/terms_of_admission',
                        'title' => 'Условия вступления и участия в АНВУЗ России',
                        'date' => '31.08.2025'
                    ]
                ]
            ],
            'files' => []
        ];
    }
}