<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'gb',
            'user' => 'gb-php-1',
            'pass' => '291292',
            'port' => '3307',
            'charset' => 'utf8',

            // 'host' => '127.0.0.1:3307',
            // 'login' => 'gb-php-1',
            // 'password' => '291292',
            // 'database' => 'gb',
            // 'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'gb',
            'user' => 'gb-php-1',
            'pass' => '291292',
            'port' => '3307',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'gb',
            'user' => 'gb-php-1',
            'pass' => '291292',
            'port' => '3307',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
