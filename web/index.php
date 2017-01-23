<?php

use function Siler\Http\route;
use function Siler\require_fn as rqf;

require_once __DIR__.'/../vendor/autoload.php';

Siler\Dotenv\init(__DIR__.'/..');

Siler\Twig\init(__DIR__.'/../templates', __DIR__.'/../templates/cache', true)
    ->addFunction(new Twig_SimpleFunction('url', 'Siler\Http\url'));

route('/^\/$/', rqf(__DIR__.'/pages/home.php'));

route('/^\/fn$/', function () {
    echo 'Im closure';
    exit;
});

route('/^\/blog\/(?P<slug>[A-z0-9\-]+)\/?$/', rqf(__DIR__.'/pages/blog/post.php'));
route('/^/', rqf(__DIR__.'/pages/404.php'));
