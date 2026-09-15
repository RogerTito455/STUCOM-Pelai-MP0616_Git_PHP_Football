<?php

namespace WorldCup;

/**
 * Class to define the goalkeeper
 */
class Goalkeeper extends Player {
    public $globes; // property declared without type, like in original

    /**
     * Get the globes
     */
    public function isGlobes() {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes($globes) {
        $this->globes = $globes;
    }

    public function block(Ball $ball) {
        $effects = ["with success", "without success"];

        $effect = $effects[array_rand($effects)];

        echo "catching $effect\n";
    }
}
