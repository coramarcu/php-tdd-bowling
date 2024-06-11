<?php declare(strict_types=1);

final class Game {
    private int $total = 0;
    private int $frames = 0;

    public function getTotal(): int {
        return $this->total;
    }

    public function getFrames(): int {
        return $this->frames;
    }

    public function roll(int $pins_down): void {
        $this->total += $pins_down;
        $this->frames++;
    }

    public function score(): int {
        return $this->total;
    }
}