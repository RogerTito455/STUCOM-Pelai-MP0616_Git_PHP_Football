<?php

namespace WorldCup;

/**
 * Class to define the player
 */
class Player extends Person {
    private string $position = "";

    /**
     * Get the position
     */
    public function getPosition(): string {
        return $this->position;
    }

    /**
     * Set the position
     */
    public function setPosition(string $position): void {
        $this->position = $position;
    }

    public function passBall(): void {
        echo "passing the ball to someone else\n";
    }
}
