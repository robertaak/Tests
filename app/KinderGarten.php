<?php

namespace App;

class KinderGarten
{
    public static function translate(string $gibberish, string $letter): string
    {
        $translatedArr = [];
        $gibberishArr = explode(' ', $gibberish);
        foreach ($gibberishArr as $word) {
            if ($word[0] === $letter) {
                $translatedArr[] = strrev($word);
            } else {
                $translatedArr[] = $word;
            }
        }
        return implode (' ', $translatedArr);
    }
}
