<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'name' => env('SENDER_NAME'),
    'components' => [
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',            
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'user' => [
            'identityClass' => 'frontend\modules\auth\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'loginUrl' => '/auth/signin'
        ],
        'session' => [
            'name' => 'anvuz-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'enabled' => false
                ],
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'error/error/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                '/s/<slug:[\w_\/-]+>' => 'site/page',
                '<action>' => 'site/<action>',
                '/university/<href:[\w_\/-]+>' => 'site/university',
                '/api/v1/universities/<region:[\w_\/-]+>' => 'api/universities',
                '/api/v1/<action>' => 'api/<action>',
                '/about/<href:[\w_\/-]+>' => 'site/about',
                '/news/<href:[\w_\/-]+>' => 'site/news',
                '/document/<href:[\w_\/-]+>' => 'site/document',
                '/admin/location' => 'admin/city/index',
                '/admin/profile' => 'admin/profiles/account',
                '/admin/users/<action:(view)>' => 'admin/users/<action>',
                '/admin/profile/<action:(index|account|view|update|delete)>' => 'admin/profiles/<action>',
                '/admin/<action:(panel|setting|events|universities|users|news|help|reset-password)>' => 'admin/admin/<action>',
                '/admin/news/<action:(list|archive|create)>' => 'admin/news/<action>',
                '/sitemap' => 'sitemap/sitemap/page',
                '/sitemap.xml' => 'sitemap/sitemap/index',
                '/panel/<action:(profile|logout)>' => 'cabinet/cabinet/<action>',
                '/auth/<action:(signup|signin|logout|request-password-reset|request-password-reset-token|reset-password|resend-verification-email|verify-email|introduction)>' => 'auth/auth/<action>'
            ],
        ],
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets'
        ]
    ],
    'modules' => [
        'auth' => [
            'class' => 'frontend\modules\auth\AuthModule',
        ],
        'sitemap' => [
            'class' => 'frontend\modules\sitemap\GeneratorModule'
        ],
        'admin' => [
            'class' => 'frontend\modules\admin\AdminModule',
        ],
        'cabinet' => [
            'class' => 'frontend\modules\cabinet\CabinetModule',
        ],
        // 'public' => [
        //     'class' => 'frontend\modules\public\Module',
        // ],
        'error' => [
            'class' => 'frontend\modules\error\ErrorModule',
        ],
    ],
    'params' => $params,
];