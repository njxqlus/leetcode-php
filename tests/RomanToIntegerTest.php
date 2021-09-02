<?php
require __DIR__ . '/../vendor/autoload.php';


use Solutions\RomanToInteger;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends TestCase
{
    private RomanToInteger $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new RomanToInteger();
        parent::__construct($name, $data, $dataName);
    }

    private function solution(string $x, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($x));
    }

    public function testExample1()
    {
        $this->solution('III', 3);
    }

    public function testExample2()
    {
        $this->solution('IV', 4);
    }

    public function testExample3()
    {
        $this->solution('IX', 9);
    }

    public function testExample4()
    {
        $this->solution('LVIII', 58);
    }

    public function testExample5()
    {
        $this->solution('MCMXCIV', 1994);
    }
}
