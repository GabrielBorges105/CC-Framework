<?php

return [
    /**
     * Opções (mysql, sqlite)
     */
    'driver' => 'mysql',
    'mysql' =>[
        'host' => 'host',
        'database' => 'database',
        'user' => 'user',
        'pass' => 'pass',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ] ,
    'sqlite' =>[
        'database' => 'database.db',
    ],
];