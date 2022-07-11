<?php

use App\FindingNemo;

test('should find the little lost brat', function () {
    expect(FindingNemo::findNemo("I am finding Nemo !"))->toEqual("I found Nemo at 3!");
    expect(FindingNemo::findNemo("Nemo is me"))->toEqual("I found Nemo at 0!");
    expect(FindingNemo::findNemo("I Nemo am"))->toEqual("I found Nemo at 1!");
    expect(FindingNemo::findNemo("I am searching"))->toEqual("I can't find Nemo");
});
