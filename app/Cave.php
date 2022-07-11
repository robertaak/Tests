<?php

namespace App;

class Cave
{
    public static function yell(string $text, int $echoes): string
    {
        return str_repeat($text, $echoes);
    }
}