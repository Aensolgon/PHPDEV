<?php


return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.yandex.ru'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => 'alexeynovinovitsky@yandex.by',
        'name' => 'Type What You Want',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME', 'alexeynovinovitsky@yandex.by'),
    'password' => env('MAIL_PASSWORD', 'warhammer_cool'),
];


