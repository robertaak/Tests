<?php

use App\Burglary;
use App\StolenItems;

test('should find the little lost brat', function () {
    expect(Burglary::stolenItems([new StolenItems('tv', 30), new StolenItems('skate', 20), new StolenItems('stereo', 50)]))->toEqual(100);
    expect(Burglary::stolenItems([new StolenItems('painting', 20000)]))->toEqual(20000);
    expect(Burglary::stolenItems([new StolenItems('ring', 250), new StolenItems('necklace', 500)]))->toEqual(750);
    expect(Burglary::stolenItems([]))->toEqual("Lucky you!");
});