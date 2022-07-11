<?php

use App\MatchMaker;

test ('should return all the hot couples Love Island Style', function () {
    expect (MatchMaker::coupleUp(["Elise", "Mary"], ["John", "Rick"]))->toEqual([["Elise", "John"], ["Mary", "Rick"]]);
    expect (MatchMaker::coupleUp(["Ana", "Amy", "Lisa"], ["Bob", "Josh"]))->toEqual(["Cupid is on vacation!"]);
    expect (MatchMaker::coupleUp(["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"]))->toEqual([["Ana", "Bob"], ["Amy", "Josh"],["Lisa", "Tim"]]);
});