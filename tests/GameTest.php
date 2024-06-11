<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testRollMethodExists() {
        $this->assertTrue(
            method_exists(Game::class, 'roll'), 'Method roll() does not exist in Game class'
        );
    }
}