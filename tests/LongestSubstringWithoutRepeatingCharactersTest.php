<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Solutions\LongestSubstringWithoutRepeatingCharacters;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    private LongestSubstringWithoutRepeatingCharacters $problem;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->problem = new LongestSubstringWithoutRepeatingCharacters;
        parent::__construct($name, $data, $dataName);
    }

    private function solution(string $s, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->problem->solution($s));
    }

    public function testExample1()
    {
        $this->solution('abcabcbb', 3);
    }

    public function testExample2()
    {
        $this->solution('bbbbb', 1);
    }

    public function testExample3()
    {
        $this->solution('pwwkew', 3);
    }

    public function testExample4()
    {
        $this->solution('', 0);
    }

    public function testExample5()
    {
        $this->solution(' ', 1);
    }

    public function testExample6()
    {
        $this->solution('dvdf', 3);
    }
}
