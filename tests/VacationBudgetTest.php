<?php

use App\FamilyMember;
use App\VacationBudget;

test('should return budget', function () {
    expect(VacationBudget::vacationBudget([
        new FamilyMember( 'John', 21,  23000),
        new FamilyMember('Steve',32, 40000),
        new FamilyMember('Martin',16,2700)
    ]))->toEqual(65700);
    expect(VacationBudget::vacationBudget([
        new FamilyMember('John', 21, 29000),
        new FamilyMember('Steve', 32, 32000),
        new FamilyMember('Martin', 16, 1600)
    ]))->toEqual(62600);
    expect(VacationBudget::vacationBudget([
        new FamilyMember('Chloe', 12, 0),
        new FamilyMember('Emily', 68, 1200),
        new FamilyMember('Bob', 70, 1200)
    ]))->toEqual(2400);
});
