<?php

namespace Solutions;

class ReverseInteger
{
    /**
     * https://leetcode.com/problems/reverse-integer/
     * @param int $x
     * @return int
     */
    public function solution(int $x): int
    {
        if (abs($x) <= 9) {
            return $x;
        }
        $reversedX = intval(strrev($x));
        $reversedX = $x < 0 ? -$reversedX : $reversedX;
        return ($reversedX >= -2147483648 && $reversedX <= 2147483647) ? $reversedX : 0;
    }
}
