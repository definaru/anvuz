<?php

namespace frontend\data;
use frontend\components\icons\Icons;

class AsideData
{
    public static function list()
    {
        return [
            [
                'icon' => '',
                'title' => 'Страницы',
                'link' => '',
                'value' => '',
                'list' => 'label'
            ],
            [
                'icon' => 'UsersRound',
                'title' => 'Пользователи',
                'link' => '/admin/users',
                'value' => '',
                'list' => false
            ],
            [
                'icon' => 'CalendarDays',
                'title' => 'События',
                'link' => '/admin/events',
                'value' => '',
                'list' => false
            ],
            [
                'icon' => 'GraduationCap',
                'title' => 'Университеты',
                'link' => '/admin/universities',
                'value' => '17',
                'list' => false
            ],
            [
                'icon' => 'NotebookText',
                'title' => 'Новости',
                'link' => 'admin/news',
                'value' => '',
                'list' => [
                    [
                        'name' => 'Список новостей',
                        'link' => '/admin/news/list'
                    ],
                    [
                        'name' => 'Архив',
                        'link' => '/admin/news/archive'
                    ],
                ]
            ],
            [
                'icon' => 'mapPin',
                'title' => 'Геолокация',
                'link' => '/admin/location',
                'value' => '',
                'list' => false
            ],
            [
                'icon' => '',
                'title' => 'Ресурсы',
                'link' => '',
                'value' => '',
                'list' => 'label'
            ],
            [
                'icon' => 'Person',
                'title' => 'Профиль',
                'link' => '/admin/profile',
                'value' => '',
                'list' => false
            ],
            [
                'icon' => 'Settings',
                'title' => 'Настройки',
                'link' => '/admin/setting',
                'value' => '',
                'list' => false
            ],
            [
                'icon' => 'CircleQuestionMark',
                'title' => 'Помощь',
                'link' => '/admin/help',
                'value' => '',
                'list' => false
            ],
        ];
    }
}