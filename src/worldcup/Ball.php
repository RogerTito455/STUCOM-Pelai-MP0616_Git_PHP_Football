<?php

namespace WorldCup;

/**
 * Class to define the ball
 */
class Ball {
    private string $material;

    public function __construct(string $material = "leather") {
        $this->material = $material;
    }

    /**
     * Get the material
     */
    public function getMaterial(): string {
        return $this->material;
    }

    /**
     * Set the material
     */
    public function setMaterial(string $material): void {
        $this->material = $material;
    }

    public function move() {
        echo "moving the ball\n";
    }
}
