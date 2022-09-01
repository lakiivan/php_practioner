<?php

return [
    'database' => [
        'name'          => 'mytodo',
        'username'      => 'ivan2',
        'password'      => '',
        'connection'    => 'mysql:host=127.0.0.1;port=3306',
        'options'       => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
