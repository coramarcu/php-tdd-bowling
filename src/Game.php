<?php declare(strict_types=1);

final class Game {
    private int $total = 0;
    private int $frames = 0;
    private int $rolls = 0;

    public function getTotal(): int {
        return $this->total;
    }

    public function getFrames(): int {
        return $this->frames;
    }

    public function getRolls(): int {
        return $this->rolls;
    }

    public function roll(int $pins_down): void {
        $this->total += $pins_down;

        if($this->frames < 10) {
            $this->frames++;
        }

        if($this->rolls < 21) {
            $this->rolls++;
        }
    }

    public function score(): int {
        return $this->total;
    }
}