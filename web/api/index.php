<?php

require_once __DIR__.'/../../app/bootstrap.php';

use Siler\Route;

Route\get('/users', './users.php');

var_dump($_SERVER['PATH_INFO']);
var_dump(Siler\Http\path());
