<?php declare(strict_types=1);

final class Game {
    private int $total = 0;

    public function getTotal(): int {
        return $this->total;
    }

    public function roll(int $pins_down): void {
        $this->total += $pins_down;
    }
}