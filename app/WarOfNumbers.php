<?php

namespace App;

class WarOfNumbers
{
    public static function whoWins(array $numbers): string
    {
        $oddArr = [];
        $evenArr = [];

        foreach ($numbers as $number) {
            if ($number % 2 === 0) $evenArr[] = $number;
            else $oddArr[] = $number;
        }

        $oddSum = array_sum($oddArr);
        $evenSum = array_sum($evenArr);

        if ($evenSum > $oddSum) {
            $diff = $evenSum - $oddSum;
            return "Even numbers win by $diff";
        } elseif ($evenSum < $oddSum) {
            $diff = $oddSum - $evenSum;
            return "Odd numbers win by $diff";
        } else {
            return "There are no winners";
        }
    }
}