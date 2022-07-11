<?php

use App\MaxMin;

test('should return max and min values in an array', function() {
   expect(MaxMin::minMax([1, 2, 3, 4, 5]))->toEqual([1, 5]);
   expect(MaxMin::minMax([2334454, 5]))->toEqual([5, 2334454]);
   expect(MaxMin::minMax([1]))->toEqual([1, 1]);
});