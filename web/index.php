<?php

require_once __DIR__.'/../vendor/autoload.php';

Siler\Dotenv\init(__DIR__.'/..');
Siler\Twig\init(__DIR__.'/../templates', __DIR__.'/../templates/cache', true);

Siler\route('/^\/$/', Siler\require_fn(__DIR__.'/pages/home.php'));
Siler\route('/^\/blog\/(?P<slug>[A-z0-9\-]+)\/?$/', Siler\require_fn(__DIR__.'/pages/blog/post.php'));
Siler\route('/^/', Siler\require_fn(__DIR__.'/pages/404.php'));