<?php

namespace App;

class HideAndSeek
{
    public static function hidden(string $crowd): string
    {
        $lower = [];
        $split = str_split($crowd);
        foreach ($split as $letter) {
            if (ctype_lower($letter)) {
                $lower[] = $letter;
            }
        }
        return implode($lower);
    }
}