<?php

namespace App;

class Discount
{
    public static function afterDiscount(float $startingPrice, float $discount): float
    {
        return $startingPrice - ($startingPrice * $discount / 100);
    }
}