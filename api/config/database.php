<?php
return [
    'default' => 'lumen',
    'migrations' => 'migrations',
    'connections' => [
        'lumen' => [
            'driver'    => 'mysql',
            'host'      => 'db',
            'database'  => 'lumen',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'lumen2' => [
            'driver'    => 'mysql',
            'host'      => 'db',
            'database'  => 'lumen2',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];
