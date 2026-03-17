<?php
return [
    'adminEmail' => env('ADMIN_EMAIL'),
    'supportEmail' => env('SUPPORT_EMAIL'),
    'senderEmail' => env('EMAIL_ADDRESS'),
    'senderName' => env('SENDER_NAME'),
    'site' => env('SITE'),
    'address' => env('ADDRESS'),
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
    'languages' => ['ru', 'en', 'zh'],
    'current_languages' => 'ru'
];
