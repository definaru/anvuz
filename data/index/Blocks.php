<?php
namespace frontend\data\index;

use Yii;
use yii\helpers\Url;
use frontend\components\icons\Icons;
use frontend\models\NewsSearch;

class Blocks
{
    public static function list()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 3;

        $canonical = Url::to('', true);
        $title = 'Главная | АНВУЗ России';
        $description = 'Миссия АНВУЗ это создание и развитие единого российского образовательного пространства независимо от формы учредительства образовательных организаций.';
        $image = '';
        $iconSize = 80;
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
            'blocks' => [
                'hero', 
                'about', 
                'news',
                //'events',
                //'partner',
                'test'
            ],  
            'content' => [
                'dataProvider' => $dataProvider,
                'news' => [],
                'about' => [
                    [
                        'icon' => Icons::Composition($iconSize),
                        'title' => '',
                        'subtitle' => 'Вхождение в профессиональное сообщество'
                    ],
                    [
                        'icon' => Icons::Activities($iconSize),
                        'title' => '',
                        'subtitle' => 'Представление интересов в органах государственной власти'
                    ],
                    [
                        'icon' => Icons::Education($iconSize),
                        'title' => '',
                        'subtitle' => 'Участие в разработке законодательных актов'
                    ],
                    [
                        'icon' => Icons::Join($iconSize),
                        'title' => '',
                        'subtitle' => 'Вхождение в профильные советы при органах государственной власти (ГД РФ, Минобрнауки и др)'
                    ],
                    [
                        'icon' => Icons::Stars($iconSize),
                        'title' => '',
                        'subtitle' => 'Представление интересов сообщества на международной арене'
                    ]
                ],
                'events' => [
                    [
                        'image' => '/site/image/events/1.jpg',
                        'title' => 'Конкурс детских рисунков «Портрет лучшего друга»',
                        'description' => 'Татышлинская сельская модельная библиотека с. Аксаитово',
                        'datetime' => '30 июль | ср 16:00',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/events/2.jpg',
                        'title' => 'Игра-путешествие «К сокровищам родного слова»',
                        'description' => 'Модельная библиотека им. К. Аухатова с. Старый Курдым',
                        'datetime' => '19 авг | вт 16:00',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/events/3.jpg',
                        'title' => 'Литературная викторина «Книжный лабиринт»',
                        'description' => 'Модельная библиотека им. К. Аухатова с. Старый Курдым',
                        'datetime' => '16 сент | вт 16:00',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/events/4.jpg',
                        'title' => 'Громкие чтения «О поэте говорят стихи»',
                        'description' => 'Модельная библиотека им. К. Аухатова с. Старый Курдым',
                        'datetime' => '03 окт | пт 12:00',
                        'link' => '#'
                    ]
                ],
                'partner' => [
                    [
                        'image' => '/data/partners/Big_Data_Research_Consortium.png',
                        'title' => 'Консорциуму исследователей больших данных',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/Минобрнауки%20России.png',
                        'title' => 'Министерство образования и науки Российской Федерации',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/cropped.png',
                        'title' => 'Федеральная служба по надзору в сфере образования и науки',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/cropped-ANIPES.png',
                        'title' => 'Официальный портал частных университетов Камеруна',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/Memorial_Museum_of_Cosmo.png',
                        'title' => 'Мемориальный музей космонавтики',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/Консорциум%20Новая%20площадь.png',
                        'title' => 'Консорциум ценностно-ориентированных образовательных организаций «Новая площадь»',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/Консорциум%20Память%20сильнее%20оружия.png',
                        'title' => 'Консорциум «Память сильнее оружия»',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/ABMES.png',
                        'title' => 'Бразильская ассоциация сторонников высшего образования (ABMES)',
                        'link' => '#'
                    ],
                    [
                        'image' => '/data/partners/Российское%20профессорское%20собрание.png',
                        'title' => 'Российское профессорское собрание',
                        'link' => '#'
                    ]
                ]
            ],
            'files' => []
        ];
    }
}