<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public function play(string $playerOneMove, string $playerTwoMove): string
    {
        if ($playerOneMove === 'r'){
            return "p1";
        }
        return "p2";
    }
}