<?php

require_once __DIR__.'/../../app/bootstrap.php';

use function Siler\Route\route;

route('get', '/{slug}', 'pages/post.php');
route('get', '.*', '../pages/404.php');
