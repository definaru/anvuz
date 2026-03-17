<?php

return [
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'sqlite:' . __DIR__ . '/sqlite.db',
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
            //'useFileTransport' => false,
            'useFileTransport' => true, // false — для реальной отправки писем
            'fileTransportPath' => '@common/runtime/mail',
            'transport' => [
                'scheme' => 'smtps',
                'host' => 'smtp.yandex.ru', // smtp.spaceweb.ru
                'username' => env('EMAIL_ADDRESS'),
                'password' => env('EMAIL_PASSWORD'),
                'port' => 465, // 587,
                'encryption' => 'ssl',
                'streamOptions' => [ 
                    'ssl' => [ 
                        'verify_peer' => true,
                        'verify_peer_name' => true,
                        'allow_self_signed' => true,
                    ],
                ]
            ]
        ],
    ],
];
