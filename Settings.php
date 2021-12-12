<?php

define('APP_ROOT', __DIR__);

return [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => false,

        'doctrine' => [
            'dev_mode' => true,

            'cache_dir' => APP_ROOT . '/var/doctrine',

            'metadata_dirs' => [APP_ROOT . '/src/Domain'],

            'connection' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'port' => 3306,
                'dbname' => 'apiticket',
                'user' => 'root',
                'password' => '',
                'charset' => 'utf-8'
            ]
        ]
    ]
];