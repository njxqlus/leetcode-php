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
        $isNegativeX = $x < 0;
        $minInt = -2 ** 31;
        $maxInt = abs($minInt) - 1;
        $reversedX = intval(strrev(strval(abs($x))));
        $reversedX = $isNegativeX ? -$reversedX : $reversedX;
        $reversedX = filter_var($reversedX, FILTER_VALIDATE_INT, ['options' => ['min_range' => $minInt, 'max_range' => $maxInt]]);
        return !$reversedX ? 0 : $reversedX;
    }
}
