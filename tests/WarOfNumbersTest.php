<?php

use App\WarOfNumbers;

test('should return winners', function () {
    expect(WarOfNumbers::whoWins([2, 8, 7, 5]))->toEqual("Odd numbers win by 2");
    expect(WarOfNumbers::whoWins([12, 90, 75]))->toEqual("Even numbers win by 27");
    expect(WarOfNumbers::whoWins([5, 9, 45, 6, 2, 7, 34, 8, 6, 90, 5, 243]))->toEqual("Odd numbers win by 168");
    expect(WarOfNumbers::whoWins([2, 8, 7, 3]))->toEqual("There are no winners");
});