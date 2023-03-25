<?php

namespace Lok\ManipulateText\Tests\Model;

use Lok\ManipulateText\Model\Generators;
use PHPUnit\Framework\TestCase;

class TestGenerators extends TestCase
{
    public function testGeneratePassword()
    {
        $generator = new Generators();
        $password = $generator->generatePassword(20);
        $this->assertEquals(20, strlen($password));
    }

    public function testGenerateHourMinuteSeconds()
    {
        $generator = new Generators();
        $hourMinuteSeconds = $generator->generateTime();
        $this->assertEquals(8, strlen($hourMinuteSeconds));
    }

    public function testGenerateHourMinute()
    {
        $generator = new Generators();
        $hourMinute = $generator->generateTime(false);
        $this->assertEquals(5, strlen($hourMinute));
    }

    public function testGeneratePhoneNumber()
    {
        $generator = new Generators();
        $phoneNumber = $generator->generatePhoneNumber('(xx) xxxxx-xxxx');
        $this->assertEquals(15, strlen($phoneNumber));
    }
}