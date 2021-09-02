<?php

namespace Solutions;

class TwoSum
{
    /**
     * https://leetcode.com/problems/two-sum/
     * @param Integer[] $nums
     * @param Integer $target
     * @return array|null
     */
    function solution(array $nums, int $target): array|null
    {
        foreach ($nums as $i => &$num) {
            unset($nums[$i]);
            $sumIndex = array_search($target - $num, $nums);
            if ($sumIndex) {
                return [$i, $sumIndex];
            }
        }
        return null;
    }
}
