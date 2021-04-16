<?php

require 'vendor/autoload.php';

session_id('se8laoofqhjm94q13n992mi1up');

session_start();


echo session_id();

$_SESSION['id'] = time();

echo '<br />';

echo $_SESSION['id'];

echo SID;

// echo $_COOKIE['XSRF-TOKEN'] ?? "null";

// echo '<br />';

// echo $_COOKIE['laravel_session'] ?? "null";

// $hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

// $data = [
//     'domain' => 'localhost',
//     'expires' => time() + 7200,
//     'samesite' => 'lax',
//     'httponly' => true
// ];
// setcookie('laravel_session_bitzen', $hash, $data);
