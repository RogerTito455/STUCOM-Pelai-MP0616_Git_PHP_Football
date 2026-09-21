<?php

namespace WorldCup;

/**
 * Class to define the midfielder
 */
class Midfielder extends Player
{
    private bool $vision;

    /**
     * Get the vision
     */
    public function isVision(): bool
    {
        return $this->vision;
    }

    /**
     * Set the vision
     */
    public function setVision(bool $vision): void
    {
        $this->vision = $vision;
    }

    public function organize()
    {

        echo "Organizando el medio campo por B\n";


        echo "Organizando tactica por A\n";
    }
}
