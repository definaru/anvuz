<?php

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    [
        'components' => [
            'request' => [
                'cookieValidationKey' => env('COOKIE_VALIDATION_KEY'),
            ],
        ],
    ]
);
