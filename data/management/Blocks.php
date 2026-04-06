<?php
namespace frontend\data\management;

use yii\helpers\Url;
use frontend\models\Profiles;


class Blocks
{
    public static function management()
    {
        return Profiles::find()
            ->with('location', 'section', 'contacts')
            ->orderBy(['section' => SORT_ASC, 'lastname' => SORT_ASC])
            ->where(['is not', 'section', null])
            ->asArray()
            ->all();
    }

    public static function groupManagement()
    {
        $profiles = self::management();
        $grouped = [];
        foreach ($profiles as $p) {
            $key = $p['section']['sortable'];
            if (!isset($grouped[$key])) {
                $grouped[$key] = [
                    'section' => $p['section']['name'],
                    'profiles' => []
                ];
            }
            $grouped[$key]['profiles'][] = $p;
        }
        ksort($grouped);
        return $grouped;
    }


    public static function list()
    {
        $canonical = Url::to('management', true);
        $title = 'Дирекция | АНВУЗ России';
        $description = 'Информация о дирекции АНВУЗ России и профессиональных образовательных организациях России.';
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
            'blocks' => ['hero', 'management'],
            'content' => [
                'list' => self::groupManagement()
            ],
            'files' => []
        ];
    }
}