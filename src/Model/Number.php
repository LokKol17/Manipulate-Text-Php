<?php

namespace Lok\ManipulateText\Model;

class Number
{
    private string $number;
    public function __construct(string|int|float $number)
    {
        $this->number = (string) $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getNumberAsInt(): int
    {
        return (int) $this->number;
    }

    public function getNumberAsFloat(): float
    {
        return (float) $this->number;
    }

    public function getEachNumber(): array
    {
        return str_split($this->number);
    }

    public function howMuchDigitsHaveNumber(): int|string
    {
        $number = str_replace('.', '', $this->number);
        $number = str_replace('-', '', $number);
        return strlen($number);
    }

    public function isNegative(): bool
    {
        return $this->number[0] === '-';
    }

}