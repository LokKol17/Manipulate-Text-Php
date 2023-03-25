<?php

namespace Lok\ManipulateText\Model;

class StringValidations
{

    public static function isValidEmail(string $validEmail): bool
    {
        $regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($regexEmail, $validEmail) === 1;
    }

    public static function isValidUrl(string $validUrl): bool
    {
        $regexUrl = '/^(http|https):\/\/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        return preg_match($regexUrl, $validUrl) === 1;
    }
}