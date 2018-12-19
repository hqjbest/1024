<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=mysql;dbname=1024',
        'username' => 'root',
        'password' => '1024',
        'charset' => 'utf8',
        'on afterOpen' => function($event) {
            $event->sender->createCommand("SET time_zone='+8:00';SET SESSION wait_timeout=65535;")->execute();
        }
    ],
];
