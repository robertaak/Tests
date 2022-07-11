<?php

namespace App;

class FindingNemo
{
    public static function findNemo(string $school): string
    {
        $schoolArr = explode(' ', $school);
        $index = array_search("Nemo", $schoolArr);

        if ($index !== false) {
            return "I found Nemo at $index!";
        }
        return "I can't find Nemo";
    }
}

