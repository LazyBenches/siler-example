<?php


$calcHtml = require __DIR__.'/../components/calc.php';

echo Siler\Twig\render('pages/home.twig', ['calc' => $calcHtml]);
exit;