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
        ],
        'user' => [
            'identityClass' => 'common\models\User',
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
                '<action>' => 'site/<action>',
                '/news/<href:[\w_\/-]+>' => 'site/news',
                //'<action:(news|privacy-policy|user-agreement|contact|about|documents|management)>' => 'site/<action>',
                '/sitemap' => 'sitemap/sitemap/page',
                '/sitemap.xml' => 'sitemap/sitemap/index',
                '/auth/<action:(signup|signin|logout|request-password-reset|request-password-reset-token|reset-password|resend-verification-email)>' => 'auth/auth/<action>'
                // '/panel/video/<action:(view|update)>/<uuid:[\w_\/-]+>' => 'panel/video/<action>',
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
        // 'admin' => [
        //     'class' => 'frontend\modules\admin\Module',
        // ],
        // 'cabinet' => [
        //     'class' => 'frontend\modules\cabinet\Module',
        // ],
        // 'public' => [
        //     'class' => 'frontend\modules\public\Module',
        // ],
        'error' => [
            'class' => 'frontend\modules\error\ErrorModule',
        ],
    ],
    'params' => $params,
];