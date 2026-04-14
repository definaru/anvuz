<?php
namespace frontend\data\contact;
use Yii;
use yii\helpers\Url;

class Blocks
{
    public static function list()
    {
        $canonical = Url::to('contact', true);
        $title = Yii::t('app', 'contacts').' | АНВУЗ России';
        $description = 'Ассоциация частных образовательных организаций высшего образования и профессиональных образовательных организаций России.';
        $image = '';
        $lang = Yii::$app->language;
        $phone = ['84959250380', '84959250381'];
        $email = ['spodakh@anvuz.ru', 'anvuz@anvuz.ru'];
        $contact = [
            'ru' => [
                [
                    'name' => 'Сподах Григорий Григорьевич', 
                    'position' => 'Исполнительный директор АНВУЗ России, кандидат экономических наук, доцент', 
                    'phone' => $phone[0], 
                    'email' => $email[0]
                ],
                [
                    'name' => 'Кругликова Ольга Викторовна', 
                    'position' => 'Главный бухгалтер АНВУЗ России', 
                    'phone' => $phone[1], 
                    'email' => $email[1]
                ],
            ],
            'en' => [
                [
                    'name' => 'Sopodakh Grigoriy Grigoryevich', 
                    'position' => 'Executive Director ANSU of Russia, Candidate of Economic Sciences, Associate Professor', 
                    'phone' => $phone[0], 
                    'email' => $email[0]
                ],
                [
                    'name' => 'Kruglikova Olga Viktorovna', 
                    'position' => 'Chief Accountant ANSU of Russia', 
                    'phone' => $phone[1], 
                    'email' => $email[1]
                ],
            ],
            'zh' => [
                [
                    'name' => '斯波達赫·格里戈里·格里戈里耶維奇', 
                    'position' => '俄羅斯高等教育協會 非大協 執行董事, 經濟學副博士，副教授', 
                    'phone' => $phone[0], 
                    'email' => $email[0]
                ],
                [
                    'name' => '克魯格利科娃·奧爾加·維克托羅夫娜', 
                    'position' => '總會計師 非大協 執行董事', 
                    'phone' => $phone[1], 
                    'email' => $email[1]
                ],
            ],
        ];
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
                'participants' => $contact[$lang]
                // [ 
                //     [
                //         'name' => 'Сподах Григорий Григорьевич',
                //         'position' => 'Исполнительный директор АНВУЗ России, кандидат экономических наук, доцент',
                //         'phone' => '84959250380',
                //         'email' => 'spodakh@anvuz.ru'
                //     ],
                //     [
                //         'name' => 'Кругликова Ольга Викторовна',
                //         'position' => 'Главный бухгалтер АНВУЗ России',
                //         'phone' => '84959250380',
                //         'email' => 'anvuz@anvuz.ru'
                //     ]
                // ]
            ],
            'files' => []
        ];
    }
}