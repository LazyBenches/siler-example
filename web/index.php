<?php

require_once __DIR__.'/../vendor/autoload.php';

Siler\Dotenv\init(__DIR__.'/..');

Siler\Twig\init(__DIR__.'/../templates', __DIR__.'/../templates/cache', true)
    ->addFunction(new Twig_SimpleFunction('url', 'Siler\url'));

Siler\route('/^\/$/', Siler\require_fn(__DIR__.'/pages/home.php'));

Siler\route('/^\/fn$/', function () {
    echo 'Im closure';
    exit;
});

Siler\route('/^\/blog\/(?P<slug>[A-z0-9\-]+)\/?$/', Siler\require_fn(__DIR__.'/pages/blog/post.php'));
Siler\route('/^/', Siler\require_fn(__DIR__.'/pages/404.php'));