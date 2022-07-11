<?php

use App\DoubleTrouble;

test('should return sorted list', function () {
    expect(DoubleTrouble::sortList(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect(DoubleTrouble::sortList(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect(DoubleTrouble::sortList(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});