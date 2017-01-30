<?php

require_once __DIR__.'/../app/bootstrap.php';

use function Siler\Route\route;

route('get', '/', 'pages/home.php');

route('get', '/fn', function () {
    echo 'Im a closure, babe!';
    exit();
});

route('get', '.*', 'pages/404.php');
