<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    /** @test */
    public function given_player_1_choose_rock_when_the_player_2_chooses_scissors_then_player_1_should_win(): void
    {
        $game = new RockPaperScissorsGame();

        self::assertSame("p1", $game->play("r","s"));
    }
}