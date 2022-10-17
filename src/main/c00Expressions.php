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
}