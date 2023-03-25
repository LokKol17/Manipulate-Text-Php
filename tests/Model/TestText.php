<?php

namespace Lok\ManipulateText\Tests\Model;

use Lok\ManipulateText\Model\Text;
use PHPUnit\Framework\TestCase;

class TestText extends TestCase
{
    public function testGetText()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('Hello world!', $text->getText());
    }

    public function testSetText()
    {
        $text = new Text('Hello world!');
        $text->setText('Hello world! Hello world!');
        $this->assertEquals('Hello world! Hello world!', $text->getText());
    }

    public function testGetWords()
    {
        $text = new Text('Hello world!');
        $this->assertEquals(['Hello', 'world!'], $text->getWords());
    }

    public function testGetSentences()
    {
        $text = new Text('Hello world! Hello world!');
        $this->assertEquals(['Hello world', 'Hello world'], $text->getSentences());
    }

    public function testRemoveSpecialChars()
    {
        $text = new Text('!Hello world!');
        $this->assertEquals('Hello world', $text->removeSpecialChars());
    }

    public function testToCamelCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('helloWorld', $text->toCamelCase());
    }

    public function testToPascalCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('HelloWorld', $text->toPascalCase());
    }

    public function testToSnakeCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('hello_world', $text->toSnakeCase());
    }

    public function testToSnakeUpperCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('HELLO_WORLD', $text->toSnakeUpperCase());
    }

    public function testToKebabCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('hello-world', $text->toKebabCase());
    }

    public function testToKebabUpperCase()
    {
        $text = new Text('Hello world!');
        $this->assertEquals('HELLO-WORLD', $text->toKebabUpperCase());
    }

    public function testIsPalindromeWord()
    {
        $text = new Text('Radar');
        $text2 = new Text('Hello');
        $this->assertTrue($text->isPalindrome());
        $this->assertFalse($text2->isPalindrome());
    }

    public function testIsPalindromeSentence() {
        $text2 = new Text('Radar is a sensor that detects the presence of objects by sending out radio waves and listening for echoes.');
        $this->assertFalse($text2->isPalindrome());
    }
}
