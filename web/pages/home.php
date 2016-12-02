<?php

use App\Service\Calc;

$calc = new Calc();
$result = $calc->sum(2, 2);

echo render('pages/home.twig', ['result' => $result]);
exit;
