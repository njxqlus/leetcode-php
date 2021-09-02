<?php

namespace Solutions;

class PalindromeNumber
{
    /**
     * https://leetcode.com/problems/palindrome-number/
     * @param int $x
     * @return bool
     */
    public function solution(int $x): bool
    {
        if ($x < 0) return false;
        if ($x <= 9) return true;
        return $x === intval(strrev($x));
    }
}
