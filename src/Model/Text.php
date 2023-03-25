<?php

namespace Lok\ManipulateText\Model;

class Text
{
    private string $specialChars = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText($text): void
    {
        $this->text = $text;
    }

    public function getWords(): array
    {
        return explode(' ', $this->text);
    }

    public function getSentences(): array
    {
        $text = $this->removeSpecialChars('.');

        $reformatedText = explode('.', $text);

        $reformatedText = array_map(function ($value) {
            return trim($value);
        }, $reformatedText);

        return array_filter($reformatedText, function ($value) {
            return $value !== '';
        });
    }

    public function removeSpecialChars(string $replaceModifier = ''): string
    {
        $text = $this->text;
        $specialChars = str_split($this->specialChars);

        foreach ($specialChars as $specialChar) {
            $text = str_replace($specialChar, $replaceModifier, $text);
        }

        return $text;
    }

    public function toCamelCase(): string
    {
        $text = $this->removeSpecialChars();
        $text = str_replace(' ', '', ucwords($text));

        return lcfirst($text);
    }

    public function toPascalCase(): string
    {
        $text = $this->toCamelCase();
        return ucfirst($text);
    }

    public function toSnakeCase(): string
    {
        $text = $this->removeSpecialChars();
        $text = str_replace(' ', '_', $text);

        return strtolower($text);
    }

    public function toKebabCase(): string
    {
        $text = $this->removeSpecialChars();
        $text = str_replace(' ', '-', $text);

        return strtolower($text);
    }

    public function toSnakeUpperCase(): string
    {
        $text = $this->toSnakeCase();
        return strtoupper($text);
    }

    public function toKebabUpperCase(): string
    {
        $text = $this->toKebabCase();
        return strtoupper($text);
    }

    public function isPalindrome(): bool
    {
        $text = $this->removeSpecialChars();
        $text = strtolower($text);
        $text = str_replace(' ', '', $text);

        $reversedText = strrev($text);

        return $text === $reversedText;
    }
}