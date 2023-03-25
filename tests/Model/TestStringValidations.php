<?php

namespace Lok\ManipulateText\Tests\Model;

use Lok\ManipulateText\Model\StringValidations;
use PHPUnit\Framework\TestCase;

class TestStringValidations extends TestCase
{
    public function testIsValidEmail()
    {
        $validEmail = 'john@doe.com';
        $this->assertTrue(StringValidations::isValidEmail($validEmail));
    }

    public function testIsNotValidEmail()
    {
        $invalidEmails = ['john@doe', 'john@doe.', '', 'john', '@', 'john.com'];
        foreach ($invalidEmails as $invalidEmail) {
            $this->assertFalse(StringValidations::isValidEmail($invalidEmail));
        }
    }

    public function testIsValidUrl()
    {
        $validUrls = ['http://www.example.com', 'https://www.example.com', 'http://example.com', 'https://example.com'];
        foreach ($validUrls as $validUrl) {
            $this->assertTrue(StringValidations::isValidUrl($validUrl));
        }
    }

    public function testIsNotValidUrl()
    {
        $invalidUrls = ['www.example.com', 'example.com', 'http://example', 'https://example', 'http://example.', 'https://example.'];
        foreach ($invalidUrls as $invalidUrl) {
            $this->assertFalse(StringValidations::isValidUrl($invalidUrl));
        }
    }
    
}