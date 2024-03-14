<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class ChangeMeTest extends TestCase
{
    private RockPaperScissorsGame $game;

    public function setUp(): void
    {
        $this->game = new RockPaperScissorsGame();
    }

    /** @test */
    public function given_player_1_choose_rock_when_the_player_2_chooses_scissors_then_player_1_should_win(): void
    {
        self::assertSame("p1", $this->game->play("r","s"));
    }

    /** @test */
    public function given_player_1_choose_scissors_when_the_player_2_chooses_rock_then_player_2_should_win(): void
    {
        self::assertSame("p2", $this->game->play("s","r"));
    }

    /** @test */
    public function given_player_1_choose_paper_when_the_player_2_chooses_rock_then_player_1_should_win(): void
    {
        self::assertSame("p1", $this->game->play("p","r"));
    }

    /** @test */
    public function given_player_1_choose_rock_when_the_player_2_chooses_paper_then_player_2_should_win(): void
    {
        self::assertSame("p2", $this->game->play("r","p"));
    }
}