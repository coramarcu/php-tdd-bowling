<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testRollMethodExists() {
        $this->assertTrue(
            method_exists(Game::class, 'roll'), 'Method roll() does not exist in Game class'
        );
    }

    public function testThatRollMethodUpdatesTheTotalWithPassedArgument() {
        $game = new Game();
        $total = $game->getTotal();

        $this->assertEquals(0, $total);

        $game->roll(5);
        $total = $game->getTotal();
        $this->assertEquals(5, $total);
    }

    public function testScoreMethodExists() {
        $this->assertTrue(
            method_exists(Game::class, 'score'), 'Method score() does not exist in Game class'
        );
    }

    public function testThatScoreMethodReturnsUpdatedTotal() {
        $game = new Game();
        $total = $game->getTotal();
        $game->roll(10);
        $total = $game->getTotal();

        $this->assertEquals(10, $game->score());
    }

    public function testThatRollMethodIncrementsFrameProperty() {
        $game = new Game();
        $frames = $game->getFrames();
        $this->assertEquals(0, $frames);

        $game->roll(3);
        $game->getFrames();
        $this->assertEquals(1, $frames);
    }
}

