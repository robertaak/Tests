<?php

namespace App;

class FamilyMember
{
    private string $name;
    private int $age;
    private int $budget;

    public function __construct(string $name, int $age, int $budget)
    {
        $this->name = $name;
        $this->age = $age;
        $this->budget = $budget;
    }

    public function getBudget(): int
    {
        return $this->budget;
    }
}