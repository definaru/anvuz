<?php
// $mailer = $this->mailer; // или Yii::$app->getModule('auth')->mailer;
// $mailer->compose('register', ['user' => $user])
//     ->setTo($user->email)
//     ->setSubject('Добро пожаловать!')
//     ->send();
return [
    'components' => [
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            //'viewPath' => '@common/mail',
            'viewPath' => '@frontend/modules/auth/views/mail',
            'useFileTransport' => false, // true — для тестов (письма сохраняются в runtime)
            'transport' => [
                'scheme' => 'smtps',
                'host' => 'smtp.yandex.ru',
                'username' => env('EMAIL_ADDRESS'),
                'password' => env('EMAIL_PASSWORD'),
                'port' => 465,
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