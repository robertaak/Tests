<?php

namespace App;

class Number
{
    public static function determine(int $number): bool
    {
        $toStr = strval($number);
        $reverse = strrev($toStr);
        $swapped = intval($reverse);
        return $number > $swapped;
    }
}
