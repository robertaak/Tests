<?php

use App\KinderGarten;

test('should return winners', function () {
    expect(KinderGarten::translate("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
    expect(KinderGarten::translate("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
    expect(KinderGarten::translate("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
});
