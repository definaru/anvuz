<?php
namespace frontend\data\index;
use yii\helpers\Url;
use frontend\components\icons\Icons;


class Blocks
{
    public static function list()
    {
        $canonical = Url::to('', true);
        $title = 'Главная | АНВУЗ России';
        $description = 'Миссия АНВУЗ это создание и развитие единого российского образовательного пространства независимо от формы учредительства образовательных организаций.';
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
            'blocks' => ['hero', 'about', 'news', 'events', 'partner'],
            'content' => [
                'news' => [
                    [
                        'image' => '/site/image/news/IMG-20241203-WA0003_0.jpg',
                        'title' => 'В Академии ИМСИТ прошло заседание Совета ректоров вузов Краснодарского края и Республики Адыгея',
                        'datetime' => '03 Dec, 2024',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/v-akademii-imsit-proshlo-zasedanie-soveta-rektorov-vuzov-krasnodarskogo-kraya-i-respubliki-adygeya',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/0992.jpg',
                        'title' => 'Российско-индийское сотрудничество: междисциплинарные исследования',
                        'datetime' => '26 Nov, 2024',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/rossiysko-indiyskoe-sotrudnichestvo-mezhdisciplinarnye-issledovaniya',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/0993.jpg',
                        'title' => 'Академии ИМСИТ – 30 лет! Поздравляем!',
                        'datetime' => '26 Nov, 2024',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/akademii-imsit-30-let-pozdravlyaem',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/1000016380.jpg',
                        'title' => 'Академия МУБиНТ подписала соглашение с мэрией Ярославля о стратегическом взаимодействии',
                        'datetime' => '29 Aug, 2025',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/akademiya-mubint-podpisala-soglashenie-s-meriey-yaroslavlya-o-strategicheskom-vzaimodeystvii',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/RBPM33OnKFI5jG0dPlRrfxYUl8yuwqXR9dXkbt3qUcVkySk2AQsg_0A-aoPKXpb1l2-5kQ3k88jTLK5Y4B2MfTeB.jpg',
                        'title' => 'Президент РАЕН П. И. Бурак вручил высший орден РАЕН профессору А. Ю. Манюшису',
                        'datetime' => '31 Jul, 2025',
                        'description' => '',
                        'category' => 'Новости АНВУЗ',
                        'link' => '/news/prezident-raen-p-i-burak-vruchil-vysshiy-orden-raen-professoru-yu-manyushisu',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/Изображение%20WhatsApp%202025-05-22%20в%2012.36.45_8c582936.jpg',
                        'title' => 'Курская область получила 150 комплектов ученической мебели от Академии ИМСИТ',
                        'datetime' => '22 May, 2025',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/kurskaya-oblast-poluchila-150-komplektov-uchenicheskoy-mebeli-ot-akademii-imsit',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/_O4A5257.jpg',
                        'title' => 'В РосНОУ прошла конференция, посвящённая изучению опыта государственного управления Китая',
                        'datetime' => '17 Mar, 2025',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/v-rosnou-proshla-konferenciya-posvyaschyonnaya-izucheniyu-opyta-gosudarstvennogo-upravleniya-kitaya',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/Изображение%20WhatsApp%202025-01-22%20в%2013.00.29_89855c6c.jpg',
                        'title' => 'Победителей научных мероприятий наградили дипломами Молодежного союза экономистов и финансистов РФ',
                        'datetime' => '22 Jan, 2025',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/pobediteley-nauchnykh-meropriyatiy-nagradili-diplomami-molodezhnogo-soyuza-ekonomistov-i',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/Изображение%20WhatsApp%202024-12-28%20в%2014.08.17_8604b529.jpg',
                        'title' => 'Прошло заседание Экспертного совета по развитию частного высшего образования Москвы',
                        'datetime' => '28 Dec, 2024',
                        'description' => '',
                        'category' => 'Новости АНВУЗ',
                        'link' => '/news/proshlo-zasedanie-ekspertnogo-soveta-po-razvitiyu-chastnogo-vysshego-obrazovaniya-moskvy',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/Изображение%20WhatsApp%202024-12-24%20в%2013.33.36_ac5fbbe9.jpg',
                        'title' => 'Открылся АРТ-Центр Института современного искусства',
                        'datetime' => '24 Dec, 2024',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/otkrylsya-art-centr-instituta-sovremennogo-iskusstva',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/1000008341.jpg',
                        'title' => 'Заместитель министра иностранных дел России открыл в Казанском инновационном университете аудиторию БРИКС',
                        'datetime' => '23 Dec, 2024',
                        'description' => '',
                        'category' => 'Новости партнёров',
                        'link' => '/news/zamestitel-ministra-inostrannykh-del-rossii-otkryl-v-kazanskom-innovacionnom-universitete',
                        'file' => ''
                    ],
                    [
                        'image' => '/site/image/news/ff020ef6d764be1d0f72a6c7ba743d23.jpg',
                        'title' => 'Профессионалы и(ли) кадры',
                        'datetime' => '10 Dec, 2024',
                        'description' => '',
                        'category' => 'Новости АНВУЗ',
                        'link' => '/news/professionaly-ili-kadry',
                        'file' => ''
                    ]
                ],
                'about' => [
                    [
                        'icon' => Icons::Composition(100),
                        'title' => 'Состав Ассоциации',
                        'href' => '/management'
                    ],
                    [
                        'icon' => Icons::Activities(100),
                        'title' => 'Деятельность',
                        'href' => '/activities'
                    ],
                    [
                        'icon' => Icons::Education(100),
                        'title' => 'Обучение',
                        'href' => '#'
                    ],
                    [
                        'icon' => Icons::Join(100),
                        'title' => 'Вступить в АНВУЗ',
                        'href' => '/auth/signin'
                    ],
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
                        'image' => '/site/image/partner/1.png',
                        'title' => 'Российский новый университет',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/partner/2.png',
                        'title' => 'Академия социального управления',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/partner/3.png',
                        'title' => 'Воронежский институт высоких технологий',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/partner/4.png',
                        'title' => 'Томский государственный архитектурно-строительный университет',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/partner/5.png',
                        'title' => 'Нижегородский государственный университет им. Н.И. Лобачевского',
                        'link' => '#'
                    ],
                    [
                        'image' => '/site/image/partner/6.png',
                        'title' => 'Санкт-Петербургский государственный экономический университет',
                        'link' => '#'
                    ]
                ]
            ],
            'files' => []
        ];
    }
}