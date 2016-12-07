<?php

use App\Service\Calc;

$calc = new Calc();
$result = $calc->sum(2, 2);

return Siler\Twig\render('components/calc.twig', compact('result'));