<?php
session_start();
require 'vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '500445857190303',
    'app_secret' => '6d3231bc2156c3488cde5d73e18f13fa',
    'default_graph_version' => 'v2.10',
]);
