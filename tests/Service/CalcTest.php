<?php

namespace App\Test\Service;

use App\Service\Calc;

class CalcTest extends \PHPUnit_Framework_TestCase
{
    protected $calc;

    protected function setUp()
    {
        $this->calc = new Calc();
    }

    public function testSum()
    {
        $expected = 4;
        $actual = $this->calc->sum(2, 2);
        $this->assertEquals($expected, $actual);
    }
}
