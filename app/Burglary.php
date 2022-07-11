<?php

namespace App;

class Burglary
{

    public static function stolenItems(array $stolenItems = null): string
    {
        if (empty($stolenItems)) {
            return "Lucky you!";
        } else {

            foreach ($stolenItems as $stolenItem) {
                $stolenItems[] = $stolenItem->getValue();
            }
            return array_sum($stolenItems);
        }
    }
}