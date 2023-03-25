<?php

namespace Lok\ManipulateText\Model;

class Generators
{

    public function generatePassword(int $length = 8): string
    {
        $valid_chars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), array("!","@","#","$","%","&","*","?"));
        $random_string = "";
        for ($i = 0; $i < $length; $i++) {
            $random_int = random_int(0, count($valid_chars) - 1);
            $random_char = $valid_chars[$random_int];
            $random_string .= $random_char;
        }
        return $random_string;
    }

    public function generatePromotionalCode(int $length = 8): string
    {
        $valid_chars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
        $random_string = "";
        for ($i = 0; $i < $length; $i++) {
            $random_int = random_int(0, count($valid_chars) - 1);
            $random_char = $valid_chars[$random_int];
            $random_string .= $random_char;
        }
        return $random_string;
    }

    public function generateTime(bool $includeSeconds = true): string
    {
        $hour = rand(0, 23);
        $minute = rand(0, 59);
        if (!$includeSeconds) {
            return sprintf("%02d:%02d", $hour, $minute);
        }
        $second = rand(0, 59);
        return sprintf("%02d:%02d:%02d", $hour, $minute, $second);
    }

    public function generatePhoneNumber(string $format = '(xx) xxxxx-xxxx'): string
    {
        $valid_chars = array_merge(range(0, 9));
        $random_string = "";
        for ($i = 0; $i < strlen($format); $i++) {
            $char = $format[$i];
            if ($char === 'x') {
                $random_int = random_int(0, count($valid_chars) - 1);
                $random_char = $valid_chars[$random_int];
                $random_string .= $random_char;
            } else {
                $random_string .= $char;
            }
        }
        return $random_string;
    }
}