<?php
require __DIR__ . '/../vendor/autoload.php';

use Performance\Performance;
use PHPUnit\Framework\TestCase;
use Solutions\TwoSum;

class TwoSumTest extends TestCase
{
    private TwoSum $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new TwoSum();
        parent::__construct($name, $data, $dataName);
    }

    private function solution(array $nums, int $target, array $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($nums, $target));
    }

    public function testExample1()
    {
        $this->solution([2, 7, 11, 15], 9, [0, 1]);
    }

    public function testExample2()
    {
        $this->solution([3, 2, 4], 6, [1, 2]);
    }

    public function testExample3()
    {
        $this->solution([3, 3], 6, [0, 1]);
    }

    public function testExample4()
    {
        $this->solution([0, 4, 3, 0], 0, [0, 3]);
    }

    public function testExample5()
    {
        $this->solution([-1, -2, -3, -4, -5], -8, [2, 4]);
    }

    public function testExample6()
    {
        $this->solution([-3, 4, 3, 90], 0, [0, 2]);
    }

    public function testPerformance()
    {
        Performance::point();
        $this->problem->solution([2, 7, 11, 15], 9);
        Performance::results();
        $this->assertTrue(true);
    }
}
