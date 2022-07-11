<?php

namespace App;

class VacationBudget
{
    public static function vacationBudget(array $family): int
    {
        $vacationBudget = [];
        foreach ($family as $member) {
            $vacationBudget[] = $member->getBudget();
        }
        return array_sum($vacationBudget);
    }

}