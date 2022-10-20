<?php
/**
 * Created by PhpStorm.
 * User: Douglas A. de Oliveira
 * Date: 11/12/2019
 */

define('DATABASE', [
    'USER' => 'root',
    'PASS' => '',
    'HOST' => 'localhost',
    'NAME' => 'sms'
]);

require_once __DIR__ . '/source/crud/Conn.php';
require_once __DIR__ . '/source/crud/Create.php';
require_once __DIR__ . '/source/crud/Read.php';
require_once __DIR__ . '/source/crud/Update.php';

require_once __DIR__ . '/source/models/User.php';
