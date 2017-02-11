<?php

require_once __DIR__.'/../../app/bootstrap.php';

use Siler\Route;

Route\get('/{slug}', './pages/post.php');
Route\get('.*', '../pages/404.php');
