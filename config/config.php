<?php
use app\engine\Db;
use app\engine\Request;
use app\models\repositories\CartRepository;
use app\models\repositories\UserRepository;
use app\engine\Session;
use app\models\repositories\GoodsRepository;

return [
    'root' => dirname(__DIR__),
    'controllers_namespaces' => 'app\\controllers\\',
    'product_per_page' => 2,
    'views_dir' => dirname(__DIR__) . "/views/",
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => '127.0.0.1:3307',
            'login' => 'gb-php-1',
            'password' => '291292',
            'database' => 'gb',
            'charset' => 'utf8',
        ],
        'request' => [
            'class' => Request::class
        ],
        'cartRepository' => [
            'class' => CartRepository::class
        ],
        'goodsRepository' => [
            'class' => GoodsRepository::class
        ],
        'userRepository' => [
            'class' => UserRepository::class
        ],
        'session' => [
            'class' => Session::class
        ]
    ]
];