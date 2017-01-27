<?php

require_once __DIR__.'/../../app/bootstrap.php';

use function Siler\Route\route;

route('get', '/users', 'users.php');
