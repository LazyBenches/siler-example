<?php

require_once __DIR__.'/../vendor/autoload.php';

Siler\Dotenv\init(__DIR__.'/..');

Siler\Twig\init(__DIR__.'/../templates', __DIR__.'/../templates/cache', true)
    ->addFunction(new Twig_SimpleFunction('url', 'Siler\Http\url'));
