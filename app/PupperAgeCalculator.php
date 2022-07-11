<?php

namespace App;

class PupperAgeCalculator
{
    public static function dogYears(int $humanYears): string
    {
        $dogYears = $humanYears * 7;
        return "Your doggie is $dogYears years old in dog years!";
    }
}
