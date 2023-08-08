<?php

return [
    'twig' => [
        'settings' => [
            'debug' => getenv('APP_ENV') === 'dev',
            'charset' => 'UTF-8',
            'cache' => false,
            'auto_reload' => false,
            'strict_variables' => true,
            'autoescape' => 'html',
            'optimizations' => -1,
        ],
        'rootPath' => 'resources/templates',
        'paths' => [
            'app' => 'app',
            'error' => 'error',
            'layout' => 'layout',
        ],
        'binDirectory' => getenv('BIN_DIRECTORY')
    ],
];
