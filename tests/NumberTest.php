<?php

use App\Number;

test('should determine if the number is largest one you can get from those two digits', function () {
    expect (Number::determine(27))->toEqual(false);
    expect (Number::determine(43))->toEqual(true);
    expect (Number::determine(14))->toEqual(false);
});
