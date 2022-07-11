<?php

use App\RockPaperScissors;

test('should return winner out of three games', function() {
    expect (RockPaperScissors::play([["R", "P"], ["R", "S"], ["S", "P"]]))->toEqual("Abigail");
    expect (RockPaperScissors::play([["R", "R"], ["S", "S"]]))->toEqual("Tie!");
    expect (RockPaperScissors::play([["R", "P"], ["R", "P"], ["P", "R"]]))->toEqual("Benson");
});
