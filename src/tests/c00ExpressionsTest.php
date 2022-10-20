<?php

namespace App\main;

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

    public function testMax1020() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals(19, $expressions->max1020(11, 19), "Input: max1020(11, 19)");
        $this->assertEquals(19, $expressions->max1020(19, 11), "Input: max1020(19, 11)");
        $this->assertEquals(11, $expressions->max1020(11, 9), "Input: max1020(11, 9)");
    }

    public function testDateFashion() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals( 2, $expressions->dateFashion(5, 10), "Input: dateFashion(5, 10)");
        $this->assertEquals( 0, $expressions->dateFashion(5, 2), "Input: dateFashion(5, 2)");
        $this->assertEquals( 1, $expressions->dateFashion(5, 5), "Input: dateFashion(5, 5)");
    }

    public function testSortaSum() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals(7, $expressions->sortaSum(3, 4), "Input: sortaSum(3, 4)");
        $this->assertEquals( 20, $expressions->sortaSum(9, 4), "Input: sortaSum(9, 4)");
        $this->assertEquals( 21, $expressions->sortaSum(10, 11), "Input: sortaSum(10, 11)");
    }

    public function testTeenSum() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals(7, $expressions->teenSum(3, 4), "Input: teenSum(3, 4)");
        $this->assertEquals(19, $expressions->teenSum(10, 13), "Input: teenSum(10, 13)");
        $this->assertEquals(19, $expressions->teenSum(13, 2), "Input: teenSum(13, 2)");
    }

    public function testTeaParty() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals(1, $expressions->teaParty(6, 8), "Input: teaParty(6, 8)");
        $this->assertEquals(0, $expressions->teaParty(3, 8), "Input: teaParty(3, 8)");
        $this->assertEquals(2, $expressions->teaParty(20, 6), "Input: teaParty(20, 6)");
    }

    public function testLoneSum() : void
    {
        $expressions = new c00Expressions();

        $this->assertEquals(6, $expressions->loneSum(1, 2, 3), "Input: loneSum(1, 2, 3)");
        $this->assertEquals(2, $expressions->loneSum(3, 2, 3), "Input: loneSum(3, 2, 3)");
        $this->assertEquals(0, $expressions->loneSum(3, 3, 3), "Input: loneSum(3, 3, 3)");
    }
}
