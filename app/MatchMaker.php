<?php

namespace App;

Class MatchMaker
{
    public static function coupleUp(array $women, array $men): array
    {
        $couples = [];
        if (count($women) !== count($men))
        {
            return ['Cupid is on vacation!'];
        } else {
            foreach ($women as $w)
            {
                $couples[] = [$w, $men[intval(array_search($w, $women))]];
            }
        }
        return $couples;
    }
}
