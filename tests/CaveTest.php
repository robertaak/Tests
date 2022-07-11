<?php

use App\Cave;

test('should return string repeated n times', function () {
    expect(Cave::yell("ab", 3))->toEqual("ababab");
    expect(Cave::yell("kiwi", 1))->toEqual("kiwi");
    expect(Cave::yell("cherry", 2))->toEqual("cherrycherry");
});