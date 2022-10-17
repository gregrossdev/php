<?php

namespace App\main;

class c00Expressions
{
//    TODO: NUMBERS
    /**
     * sumDouble(1, 2) → 3
     * sumDouble(3, 2) → 5
     * sumDouble(2, 2) → 8
     *
     * @param $a
     * @param $b
     * @return int
     *      if params are equal double the sum
     *      else sum
     */
    public function sumDouble($a,  $b): int
    {
        $sum = $a + $b;
        if($a == $b)
            return $sum * 2;
        else
            return $sum;
    }

    /**
     * diff21(19) → 2
     * diff21(10) → 11
     * diff21(21) → 0
     * diff21(22) → 2
     * diff21(-10) → 31
     *
     * @param int $n
     * @return int
     *      if n is greater than 21 return double the difference between 21 and n
     *      else the difference between n and 21
     */
    public function diff21(int $n): int
    {
        if ($n > 21)
            return 2 * ($n - 21);
        else
            return 21 - $n;
    }

    /**
     * intMax(1, 2, 3) → 3
     * intMax(1, 3, 2) → 3
     * intMax(3, 2, 1) → 3
     *
     * @param int $a
     * @param int $b
     * @param int $c
     * @return int
     *      find largest parameter
     */
    public function intMax(int $a, int $b, int $c) : int
    {
       $max = ($a > $b) ? $a : $b;
        if($max < $c)
            $max = $c;

        return $max;
    }

    /**
     * max1020(11, 19) → 19
     * max1020(19, 11) → 19
     * max1020(11, 9) → 11
     *
     * @param int $a
     * @param int $b
     * @return int
     *      if parameters within range 10 - 20 find largest value of the parameters
     *      else 0
     */
    public function max1020(int $a, int $b) : int
    {
        $a = ($a >= 10 && $a <= 20) ? $a : 0;
        $b = ($b >= 10 && $b <= 20) ? $b : 0;

        return ($a > $b) ? $a : $b;
    }
}