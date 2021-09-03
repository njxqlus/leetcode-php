<?php

namespace Solutions;

/**
 * Definition for a singly-linked list.
 */
class ListNode
{
    public int $val = 0;
    public null|ListNode $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}


class AddTwoNumbers
{
    /**
     * https://leetcode.com/problems/add-two-numbers/
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function solution(ListNode $l1, ListNode $l2): ListNode
    {
        $array = [];
        $inMemory = 0;
        while ($l1 || $l2 || $inMemory > 0) {
            $sum = $inMemory;
            if ($l1) $sum += $l1->val;
            if ($l2) $sum += $l2->val;
            $inMemory = intdiv($sum, 10);
            $array[] = $sum % 10;
            if ($l1) $l1 = $l1->next;
            if ($l2) $l2 = $l2->next;
        }
        return $this->createListNodesFromArray($array);
    }

    private function createListNodesFromArray(array $array): ListNode
    {
        $array = array_reverse($array);
        $result = new ListNode(intval($array[0]));
        for ($i = 1; $i < count($array); $i++) {
            $result = new ListNode(intval($array[$i]), $result);
        }
        return $result;
    }
}
