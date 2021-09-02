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
        $dict2 = ['IV', 'IX', 'XL', 'XC', 'CD', 'CM'];
        $len = strlen($s);
        if ($len === 1) return $dict[$s];
        $sum = 0;
        foreach ($dict2 as $x) {
            if (str_contains($s, $x)) { // use is_int(strpos($s, $x)) in PHP < 8.0
                $s = str_replace($x, '', $s);
                $sum += $dict[$x];
            }
        }
        if ($s) {
            foreach (str_split($s) as $x) {
                $sum += $dict[$x];
            }
        }
        return $sum;
    }
}
