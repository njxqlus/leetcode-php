<?php
require __DIR__ . '/../vendor/autoload.php';

use Solutions\ReverseInteger;
use PHPUnit\Framework\TestCase;
use Performance\Performance;

class ReverseIntegerTest extends TestCase
{
    private ReverseInteger $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new ReverseInteger();
        parent::__construct($name, $data, $dataName);
    }

    private function solution(int $x, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($x));
    }

    public function testExample1()
    {
        $this->solution(123, 321);
    }

    public function testExample2()
    {
        $this->solution(-123, -321);
    }

    public function testExample3()
    {
        $this->solution(120, 21);
    }

    public function testExample4()
    {
        $this->solution(0, 0);
    }

    public function testExample5()
    {
        $this->solution(1, 1);
    }

    public function testPerformance()
    {
        Performance::point();
        /** @noinspection PhpExpressionResultUnusedInspection */
        $this->problem->solution(123);
        Performance::results();
        $this->assertTrue(true);
    }
}
