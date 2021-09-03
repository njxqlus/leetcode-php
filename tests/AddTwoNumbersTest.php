<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Solutions\AddTwoNumbers;
use Solutions\ListNode;

class AddTwoNumbersTest extends TestCase
{
    private AddTwoNumbers $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new AddTwoNumbers();
        parent::__construct($name, $data, $dataName);
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

    private function solution(ListNode $l1, ListNode $l2, ListNode $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($l1, $l2));
    }

    public function testExample1()
    {
        $this->solution(
            $this->createListNodesFromArray([2, 4, 3]),
            $this->createListNodesFromArray([5, 6, 4]),
            $this->createListNodesFromArray([7, 0, 8])
        );
    }

    public function testExample2()
    {
        $this->solution(
            $this->createListNodesFromArray([0]),
            $this->createListNodesFromArray([0]),
            $this->createListNodesFromArray([0])
        );
    }

    public function testExample3()
    {
        $this->solution(
            $this->createListNodesFromArray([9, 9, 9, 9, 9, 9, 9]),
            $this->createListNodesFromArray([9, 9, 9, 9]),
            $this->createListNodesFromArray([8, 9, 9, 9, 0, 0, 0, 1])
        );
    }

    public function testExample5()
    {
        $this->solution(
            $this->createListNodesFromArray([1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1]),
            $this->createListNodesFromArray([5, 6, 4]),
            $this->createListNodesFromArray([6, 6, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1])
        );
    }
}
