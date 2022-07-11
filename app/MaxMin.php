<?php

namespace App;

class MaxMin
{
    public static function minMax(array $numbers): array
    {
        return [min($numbers), max($numbers)];
    }
}