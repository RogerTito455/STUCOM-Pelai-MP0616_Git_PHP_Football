<?php

namespace WorldCup;

class Defender extends Player {
    private bool $mark = false;

    public function steal(Ball $ball) {
        $effects = ["with fault", "without fault"];
        $effect = $effects[array_rand($effects)];
        echo "steals the ball $effect\n";
    }

    /**
     * Get the mark
     */
    public function isMark(): bool {
        return $this->mark;
    }

    /**
     * Set the mark
     */
    public function setMark(bool $mark): void {
        $this->mark = $mark;
    }
}
