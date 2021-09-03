<?php

namespace Solutions;

class SumOfTwoIntegers
{
    /**
     * https://leetcode.com/problems/sum-of-two-integers/
     * @param int $a
     * @param int $b
     * @return int
     */
    public function solution(int $a, int $b): int
    {
        return array_sum([$a, $b]);
    }
}
