<?php

return [
    'database' => [
        'host' => '127.0.0.1',
        'port' => '3333',
        'name' => 'mytodo',
        'username' => 'root',
        'password' => 'password',
        'connection' => 'mysql:127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];