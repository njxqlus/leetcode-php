<?php

namespace Solutions;

class ZigZagConversion
{
    public function solution(string $s, int $numRows): string
    {
        if ($numRows <= 1) {
            return $s;
        }
        $lines = array_pad([], $numRows, '');
        $currentLine = 0;
        $forward = true;
        foreach (str_split($s) as $letter) {
            $lines[$currentLine] .= $letter;
            if ($currentLine === 0) {
                $forward = true;
            }
            if ($currentLine === $numRows - 1) {
                $forward = false;
            }
            if ($forward) {
                $currentLine++;
            } else {
                $currentLine--;
            }
        }
        return implode('', $lines);
    }
}
