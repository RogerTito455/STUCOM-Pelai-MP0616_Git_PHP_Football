<?php

namespace WorldCup;

class Field {

    public function __construct($size) {
        $this->size = $size;
    }

    /**
     * Get the size
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Set the size
     */
    public function setSize($size) {
        $this->size = $size;
    }

    public function light() {
        echo "switching the lights\n";
    }
}
