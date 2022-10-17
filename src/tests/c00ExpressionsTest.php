<?php


use App\main\c00Expressions;
use PHPUnit\Framework\TestCase;

class c00ExpressionsTest extends TestCase
{

    public function testSumDouble()
    {
        $expressions = new c00Expressions();

        $this->assertEquals(3, $expressions->sumDouble(1,2), "Input: sumDouble(1, 2)");
        $this->assertEquals(5, $expressions->sumDouble(3,2), "Input: sumDouble(3, 2)");
        $this->assertEquals(8, $expressions->sumDouble(2,2), "Input: sumDouble(2, 2)");
    }
}
