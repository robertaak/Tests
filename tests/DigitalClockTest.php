<?php

use App\DigitalClock;

test('should convert seconds to time', function() {
    expect(DigitalClock::seconds(5025))->toEqual("01:23:45");
    expect(DigitalClock::seconds(61201))->toEqual("17:00:01");
    expect(DigitalClock::seconds(87000))->toEqual("00:10:00");
});