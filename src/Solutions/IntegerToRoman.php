<?php

namespace Solutions;

class IntegerToRoman
{
    /**
     * https://leetcode.com/problems/integer-to-roman/
     * @param int $num
     * @return string
     */
    public function solution(int $num): string
    {
        $dict = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];
        $result = '';
        foreach ($dict as $key => $value) {
            $count = intdiv($num, $value);
            if ($count > 0) {
                $result .= str_repeat($key, $count);
                $num = $num - $count * $value;
            }
        }
        return $result;
    }
}
