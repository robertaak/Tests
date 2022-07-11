<?php

namespace App;

class DoubleTrouble
{
    public static function sortList(array $attendees): array
    {
        return array_unique($attendees);
    }
}
