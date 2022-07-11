<?php

namespace App;

class DigitalClock
{
    public static function seconds(int $seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }
}
