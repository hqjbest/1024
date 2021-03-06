<?php
return [
    'components' => [
        'authManager' => [
            'class'=>'yii\rbac\DbManager',
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
