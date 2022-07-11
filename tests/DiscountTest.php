<?php

use App\Discount;

test('should return afterDiscount', function () {
    expect(Discount::afterDiscount(1500, 50))->toEqual(750);
    expect(Discount::afterDiscount(89, 20))->toEqual(71.2);
    expect(Discount::afterDiscount(100,75))->toEqual(25);
});
