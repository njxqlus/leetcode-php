<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Solutions\SumOfTwoIntegers;

class SumOfTwoIntegersTest extends TestCase
{
    private SumOfTwoIntegers $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new SumOfTwoIntegers;
        parent::__construct($name, $data, $dataName);
    }

    private function solution(int $a, int $b, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($a, $b));
    }

    public function testExample1()
    {
        $this->solution(1, 2, 3);
    }

    public function testExample2()
    {
        $this->solution(2, 3, 5);
    }
}
