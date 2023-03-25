<?php

namespace Lok\ManipulateText\Model;

class Name
{
    private string $name;
    private string $formalName;
    private string $title;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFormalName(): string
    {
        return $this->formalName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setFormalName(string $title): void
    {
        $this->title = $title;
        $this->formalName = $title . '. ' . $this->name;
    }

    public function getFirstName(): string
    {
        $name = explode(' ', $this->name);

        return $name[0];
    }

    public function getLastName(): string
    {
        $name = explode(' ', $this->name);

        return $name[count($name) - 1];
    }

    public function getFirstAndLastName(): string
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getFormalAbbreviatedName(): string
    {
        return $this->title . '. '. $this->getFirstAndLastName();
    }
}