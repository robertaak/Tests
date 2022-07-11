<?php

use App\FortuneTeller;

test('should return future prediction', function () {
    expect(FortuneTeller::future("red", "a library", "Bob", "a candle"))->toEqual("You will meet Bob in a library, and find a candle in a red room together.");
    expect(FortuneTeller::future("green", "prison", "Linda", "wine"))->toEqual("You will meet Linda in prison, and find wine in a green room together.");
    expect(FortuneTeller::future("yellow", "a bar", "Greg", "a mirror"))->toEqual("You will meet Greg in a bar, and find a mirror in a yellow room together.");
});
