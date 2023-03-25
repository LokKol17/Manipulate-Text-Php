<?php

namespace Lok\ManipulateText\Tests\Model;

use Lok\ManipulateText\Model\Number;
use PHPUnit\Framework\TestCase;

class TestNumber extends TestCase
{
    public function testGetNumber()
    {
        $number = new Number(123);
        $this->assertEquals('123', $number->getNumber());
    }

    public function testGetNumberAsInt()
    {
        $number = new Number(123);
        $this->assertEquals(123, $number->getNumberAsInt());
    }

    public function testGetNumberAsFloat()
    {
        $number = new Number(123);
        $this->assertEquals(123.0, $number->getNumberAsFloat());
    }

    public function testGetEachNumber()
    {
        $number = new Number(123);
        $this->assertEquals(['1', '2', '3'], $number->getEachNumber());
    }

    public function testGetEachNumberWithFloat()
    {
        $number = new Number(123.45);
        $this->assertEquals(['1', '2', '3', '.', '4', '5'], $number->getEachNumber());
    }

    public function testGetEachNumberWithNegativeNumber()
    {
        $number = new Number(-123);
        $this->assertEquals(['-', '1', '2', '3'], $number->getEachNumber());
    }

    public function testGetEachNumberWithNegativeFloat()
    {
        $number = new Number(-123.45);
        $this->assertEquals(['-', '1', '2', '3', '.', '4', '5'], $number->getEachNumber());
    }

    public function testGetEachNumberWithNegativeFloatWithZero()
    {
        $number = new Number(-123.450);
        $this->assertEquals(['-', '1', '2', '3', '.', '4', '5'], $number->getEachNumber());
    }

    public function testGetEachNumberWithNegativeFloatWithZeroAndTrailingZero()
    {
        $number = new Number(-123.4500);
        $this->assertEquals(['-', '1', '2', '3', '.', '4', '5'], $number->getEachNumber());
    }

    public function testGetEachNumberWithNegativeFloatWithZeroAndTrailingZeroAndLeadingZero()
    {
        $number = new Number(-0.4500);
        $this->assertEquals(['-', '0', '.', '4', '5'], $number->getEachNumber());
    }

    public function testHowMuchDigitsHaveNumber()
    {
        $number = new Number(123);
        $this->assertEquals(3, $number->howMuchDigitsHaveNumber());
    }

    public function testHowMuchDigitsHaveNumberWithFloat()
    {
        $number = new Number(123.45);
        $this->assertEquals(5, $number->howMuchDigitsHaveNumber());
    }

    public function testHowMuchDigitsHaveNumberWithNegativeNumber()
    {
        $number = new Number(-123);
        $this->assertEquals(3, $number->howMuchDigitsHaveNumber());
    }

    public function testIsNegativeNumber()
    {
        $number = new Number(-123);
        $number2 = new Number(123);
        $number3 = new Number(-12.3);
        $this->assertTrue($number->isNegative());
        $this->assertFalse($number2->isNegative());
        $this->assertTrue($number3->isNegative());
    }


}