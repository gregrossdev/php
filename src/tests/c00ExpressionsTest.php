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

    public function testDiff21()
    {
        $expressions = new c00Expressions();

        $this->assertEquals(2, $expressions->diff21(19), "Input: diff21(19)");
        $this->assertEquals(11, $expressions->diff21(10), "Input: diff21(10)");
        $this->assertEquals(0, $expressions->diff21(21), "Input: diff21(21)");
        $this->assertEquals(2, $expressions->diff21(22), "Input: diff21(22)");
        $this->assertEquals(31, $expressions->diff21(-10), "Input: diff21(-10)");
    }

    public function testIntMax()
    {
        $expressions = new c00Expressions();

        $this->assertEquals(3, $expressions->intMax(1,2, 3), "Input: intMax(1, 2, 3)");
        $this->assertEquals(3, $expressions->intMax(1,3, 2), "Input: intMax(1, 3, 2)");
        $this->assertEquals(3, $expressions->intMax(3,2, 1), "Input: intMax(3, 2, 1)");
    }
}
