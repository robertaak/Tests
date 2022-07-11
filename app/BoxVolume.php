<?php

namespace App;

class BoxVolume
{
    public static function sum(array $box): int
    {
        $volumes = [];
        foreach ($box as $b) {
            $volumes[] = array_product($b);
        }
        return array_sum($volumes);
    }
}


