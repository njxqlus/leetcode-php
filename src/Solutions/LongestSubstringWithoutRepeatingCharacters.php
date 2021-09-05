<?php

namespace Solutions;

class LongestSubstringWithoutRepeatingCharacters
{
    /**
     * https://leetcode.com/problems/longest-substring-without-repeating-characters/
     * @param string $s
     * @return int
     */
    public function solution(string $s): int
    {
        $usedLetters = [];
        $maxCount = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $letter = substr($s, $i, 1);
            if ($letter === ' ') $letter = 'space';
            $usedLetterIndex = array_search($letter, $usedLetters);
            if ($usedLetterIndex === false) {
                $usedLetters[] = $letter;
            } else {
                $usedLettersCount = count($usedLetters);
                if ($usedLettersCount > $maxCount) {
                    $maxCount = $usedLettersCount;
                }
                $i = $i - $usedLettersCount + $usedLetterIndex;
                $usedLetters = [];
            }
        }
        $usedLettersCount = count($usedLetters);
        return $maxCount < $usedLettersCount ? count($usedLetters) : $maxCount;
    }
}
