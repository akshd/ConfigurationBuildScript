<?php
$params = require(__DIR__ . '/params.php');

return [
    'components' => [
        'db'=> [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname='.$client_info['db_name'].'',
	    //'username' => 'root',
	    'username' => 'root',
	    //'password' => 'Cybage@4321',
	    'password' => 'cybage@123',
            'charset' => 'utf8',
        ],
        'dbmaster'=> [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$params['master_db_connection']['servername'].';dbname='.$params['master_db_connection']['db_name'].'',
            'username' => $params['master_db_connection']['username'],
            'password' => $params['master_db_connection']['password'],
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => true,
            'transport' => [
              'class' => 'Swift_SmtpTransport',
              'host' => '172.27.172.202',
              'username' => 'ganeshbo',
              'password' => 'Cybage$$123',
              'port' => '25',
              'encryption' => 'tls',
          ],
        ],
    ],
];

