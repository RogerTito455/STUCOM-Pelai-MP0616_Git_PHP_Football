<?php

namespace WorldCup;

/**
 * Class to define the goalkeeper
 */
class Goalkeeper extends Player {
    private bool $globes = false;

    /**
     * Get the globes
     */
    public function isGlobes(): bool {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes(bool $globes): void {
        $this->globes = $globes;
    }

    public function block(Ball $ball) {
        $effects = ["with success", "without success"];

        $effect = $effects[array_rand($effects)];

        echo "catching $effect\n";
    }
}
