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
}