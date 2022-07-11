<?php

namespace App;

class ObjectThatIConquer
{
    private $key;
    private $value;

    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getKey()
    {
        return $this->key;
    }
}