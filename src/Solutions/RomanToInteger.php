<?php

namespace Solutions;

class RomanToInteger
{
    /**
     * https://leetcode.com/problems/roman-to-integer/
     * @param string $s
     * @return int
     */
    public function solution(string $s): int
    {
        $dict = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
            'IV' => 4,
            'IX' => 9,
            'XL' => 40,
            'XC' => 90,
            'CD' => 400,
            'CM' => 900
        ];
        $len = strlen($s);
        if ($len === 1) return $dict[$s];
        $sum = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($i < $len - 1
                && in_array($s[$i], ['I', 'X', 'C'])
                && in_array($s[$i] . $s[$i + 1], ['IV', 'IX', 'XL', 'XC', 'CD', 'CM'])) {
                $sum += $dict[$s[$i] . $s[$i + 1]];
                $i++;
            } else {
                $sum += $dict[$s[$i]];
            }
        }
        return $sum;
    }
}
