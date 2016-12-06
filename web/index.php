<?php

require_once __DIR__.'/../vendor/autoload.php';

load_dotenv(__DIR__.'/..');
create_twig_env(__DIR__.'/../templates', __DIR__.'/../templates/cache', true);

static_path('/', require_fn(__DIR__.'/pages/home.php'));
regexp_path('/^\/blog\/(?P<slug>[A-z0-9\-]+)\/?$/', require_fn(__DIR__.'/pages/blog/post.php'));
