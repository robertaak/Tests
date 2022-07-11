<?php

use App\SecretSociety;

test('should return secretNames 1', function () {
    expect(SecretSociety::secretNames(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
    expect(SecretSociety::secretNames(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
    expect(SecretSociety::secretNames(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
});
