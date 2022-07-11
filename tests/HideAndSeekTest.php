<?php

use App\HideAndSeek;

test('should return hidden', function () {
    expect(HideAndSeek::hidden("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect(HideAndSeek::hidden("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect(HideAndSeek::hidden("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});

