<?php
require __DIR__ . '/../vendor/autoload.php';

use Solutions\PalindromeNumber;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends TestCase
{
    private PalindromeNumber $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new PalindromeNumber();
        parent::__construct($name, $data, $dataName);
    }

    private function solution(int $x, bool $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($x));
    }

    public function testExample1()
    {
        $this->solution(121, true);
    }

    public function testExample2()
    {
        $this->solution(-121, false);
    }

    public function testExample3()
    {
        $this->solution(10, false);
    }

    public function testExample4()
    {
        $this->solution(-101, false);
    }
}
