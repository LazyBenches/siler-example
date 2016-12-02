<?php

require_once __DIR__.'/../vendor/autoload.php';

define('ENV_PATH', __DIR__.'/..');
require_once __DIR__.'/../vendor/leocavalcante/siler/siler.php';

// optional
define('TWIG_TEMPLATES', __DIR__.'/../templates');
define('TWIG_TEMPLATES_CACHE', __DIR__.'/../templates/cache');
require_once __DIR__.'/../vendor/leocavalcante/siler/twig.php';

static_path('/', require_fn(__DIR__.'/pages/home.php'));
regexp_path('/^\/blog\/(?P<slug>[A-z0-9\-]+)\/?$/', require_fn(__DIR__.'/pages/blog/post.php'));
