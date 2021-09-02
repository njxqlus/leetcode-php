<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Solutions\IntegerToRoman;

class IntegerToRomanTest extends TestCase
{
    private IntegerToRoman $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new IntegerToRoman();
        parent::__construct($name, $data, $dataName);
    }

    private function solution(int $num, string $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($num));
    }

    public function testExample1()
    {
        $this->solution(3, 'III');
    }

    public function testExample2()
    {
        $this->solution(4, 'IV');
    }

    public function testExample3()
    {
        $this->solution(9, 'IX');
    }

    public function testExample4()
    {
        $this->solution(58, 'LVIII');
    }

    public function testExample5()
    {
        $this->solution(1994, 'MCMXCIV');
    }
}
