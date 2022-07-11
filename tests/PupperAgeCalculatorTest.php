<?php

use App\PupperAgeCalculator;

test('should return dog years', function () {
    expect(PupperAgeCalculator::dogYears(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect(PupperAgeCalculator::dogYears(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect(PupperAgeCalculator::dogYears(15))->toEqual("Your doggie is 105 years old in dog years!");
});
