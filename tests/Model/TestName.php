<?php

namespace Lok\ManipulateText\Tests\Model;

use Lok\ManipulateText\Model\Name;
use PHPUnit\Framework\TestCase;

class TestName extends TestCase
{
    private string $name = 'John Matt lorem Doe';
    public function testGetName()
    {
        $name = new Name($this->name);
        $this->assertEquals($this->name, $name->getName());
    }
    public function testGetFirstName()
    {
        $name = new Name($this->name);
        $this->assertEquals('John', $name->getFirstName());
    }

    public function testGetLastName()
    {
        $name = new Name($this->name);
        $this->assertEquals('Doe', $name->getLastName());
    }

    public function testGetFirstAndLastName()
    {
        $name = new Name($this->name);
        $this->assertEquals('John Doe', $name->getFirstAndLastName());
    }

    public function testGetFormalName()
    {
        $name = new Name($this->name);
        $name->setFormalName('Mr');
        $this->assertEquals('Mr. John Matt lorem Doe', $name->getFormalName());
    }

    public function testGetFormalAbbreviatedName()
    {
        $name = new Name($this->name);
        $name->setFormalName('Mr');
        $this->assertEquals('Mr. John Doe', $name->getFormalAbbreviatedName());
    }

    public function testSetName()
    {
        $name = new Name($this->name);
        $name->setName('John Doe');
        $this->assertEquals('John Doe', $name->getName());
    }

    public function testSetFormalName()
    {
        $name = new Name($this->name);
        $name->setFormalName('Mr');
        $this->assertEquals('Mr. John Matt lorem Doe', $name->getFormalName());
    }
}