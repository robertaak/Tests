<?php

namespace App;

class ObjectPro
{
    public static function sortObject(array $array): array
    {
        $keyArray = [];
        $valuesArray = [];
        foreach ($array as $object) {
            $keyArray[] = $object->getKey();
            $valuesArray[] = $object->getValue();
        }
        return [$keyArray , $valuesArray];
    }
}