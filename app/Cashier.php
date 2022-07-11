<?php

namespace App;

class Cashier
{
    public static function totalPrice(array $basket): float
    {
        $sumArr = [];
        foreach ($basket as $product) {
            $sumArr[] = $product->getQuantity() * $product->getPrice();
        }
        return array_sum($sumArr);
    }
}