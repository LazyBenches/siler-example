<?php

require_once __DIR__.'/../app/bootstrap.php';

use Siler\Route;

Route\get('/', './pages/home.php');

Route\get('/fn', function () {
    echo 'Im a closure, babe!';
    exit();
});

Route\get('.*', './pages/404.php');
