<?php

namespace App;

class PeelTheOnion
{
    public static function peel(array $onion): array
    {
        $sorted = [];
        array_shift($onion);
        array_pop($onion);

        foreach ($onion as $layer) {
            array_shift($layer);
            array_pop($layer);

            $sorted[] = $layer;

        }
        return $sorted;
    }
}