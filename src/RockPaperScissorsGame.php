<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public function play(string $moveOne, string $moveTwo): string
    {
        if ($moveOne === 'p') {
            return "p1";
        }

        if ($moveOne === 'r'){
            return "p1";
        }

        return "p2";
    }
}