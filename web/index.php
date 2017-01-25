<?php

require_once __DIR__.'/../app/bootstrap.php';

use function Siler\Route\route;

route('/', 'pages/home.php');
route('/blog/{slug}', 'pages/blog/post.php');

route('/fn', function () {
    echo 'Im a closure, babe!';
    exit();
});

route('.*', 'pages/404.php');
