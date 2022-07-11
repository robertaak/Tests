<?php

namespace App;

class StolenItems
{
    private string $name;
    private int $value;

    public function __construct(string $name, int $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}