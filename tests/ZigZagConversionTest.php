<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Solutions\ZigZagConversion;

class ZigZagConversionTest extends TestCase
{
    private ZigZagConversion $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new ZigZagConversion;
        parent::__construct($name, $data, $dataName);
    }

    private function solution(string $s, int $numRows, string $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($s, $numRows));
    }

    public function testExample1()
    {
        $this->solution('PAYPALISHIRING', 3, 'PAHNAPLSIIGYIR');
    }

    public function testExample2()
    {
        $this->solution('PAYPALISHIRING', 4, 'PINALSIGYAHRPI');
    }

    public function testExample3()
    {
        $this->solution('A', 1, 'A');
    }
}
