<?php

namespace App;

class RockPaperScissors
{
    public static function play(array $game): string
    {
        $conditions = [
            'R' => ['S'],
            'P' => ['R'],
            'S' => ['P']
        ];

        $results = [];

        foreach ($game as $set) {
            if ($set[0] === $set[1]) {
                $winner = "Tie!";
            } elseif (in_array($set[1], $conditions[$set[0]])) {
                $winner = "Abigail";
            } else {
                $winner = 'Benson';
            }
            $results[] = $winner;
        }
        $count = array_count_values($results);
        arsort($count);
        $keys = array_keys($count);
        return $keys[0];
    }
}